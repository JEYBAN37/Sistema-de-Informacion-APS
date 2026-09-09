<?php
App::uses('AppShell', 'Console/Command');

class UserProcessShell extends AppShell
{
    public $uses = ['User', 'Responsable'];

    public function processBatch()
    {
        ini_set('memory_limit', '1024M');
        set_time_limit(0);

        // Desactivar temporalmente el nivel de log en runtime para ahorrar memoria extra
        Configure::write('debug', 0);

        $filePath = !empty($this->args[0]) ? $this->args[0] : null;

        if (!$filePath || !file_exists($filePath)) {
            return;
        }

        try {
            $rawContent = file_get_contents($filePath);
            $usuarios = json_decode($rawContent, true);

            if (empty($usuarios) || !is_array($usuarios)) {
                return;
            }

            $db = $this->User->getDataSource();

            // Extraer cédulas
            $cedulasUsuarios = array_map(function ($u) {
                return trim($u['cedula']);
            }, $usuarios);

            $usuariosExistentes = $this->User->find('list', [
                'conditions' => ['User.username' => $cedulasUsuarios],
                'fields'     => ['User.username', 'User.id'],
                'recursive'  => -1
            ]);

            foreach ($usuarios as $index => $usuarioData) {
                $cedula = trim($usuarioData['cedula']);
                $existe = array_key_exists($cedula, $usuariosExistentes);

                // Eliminar usuario si estado = 'N'
                if (isset($usuarioData['estado']) && $usuarioData['estado'] === 'N') {
                    if ($existe) {
                        $this->User->delete($usuariosExistentes[$cedula]);
                    }
                    continue;
                }

                // Guardar/Actualizar User
                $this->User->create();
                $datosUser = [
                    'username' => $cedula,
                    'nombre'   => isset($usuarioData['nombre']) ? strtoupper(trim($usuarioData['nombre'])) : null,
                    'nivel'    => 'D',
                    'password' => 'Cc' . $cedula,
                    'group_id' => 3,
                ];

                if ($existe) {
                    $datosUser['id'] = $usuariosExistentes[$cedula];
                }

                if ($this->User->save($datosUser)) {
                    // Guardar/Actualizar Responsable
                    $this->Responsable->create();
                    $datosResponsable = [
                        'nombres'   => isset($usuarioData['nombre']) ? strtoupper(trim($usuarioData['nombre'])) : null,
                        'tipodoc'   => 'CC',
                        'numero'    => $cedula,
                        'celular'   => isset($usuarioData['telefono']) ? $usuarioData['telefono'] : null,
                        'correo'    => isset($usuarioData['correo']) ? $usuarioData['correo'] : null,
                        'profesion' => isset($usuarioData['perfil']) ? $usuarioData['perfil'] : null,
                        'contrato'  => isset($usuarioData['contrato']) ? $usuarioData['contrato'] : null,
                        'nodo'      => isset($usuarioData['red']) ? $usuarioData['red'] : null,
                        'ebs'       => isset($usuarioData['ebs']) ? $usuarioData['ebs'] : 'PENDIENTE',
                    ];

                    $responsableExistente = $this->Responsable->find('first', [
                        'conditions' => ['Responsable.numero' => $cedula],
                        'fields'     => ['Responsable.id'],
                        'recursive'  => -1
                    ]);

                    if ($responsableExistente) {
                        $datosResponsable['id'] = $responsableExistente['Responsable']['id'];
                    }

                    $this->Responsable->save($datosResponsable);
                }

                // Vaciar cache SQL de CakePHP periódicamente
                if ($index % 20 === 0) {
                    $db->_queriesCnt = 0;
                    $db->_queriesTime = 0;
                    $db->_queriesLog = [];
                }
            }
        } catch (Exception $e) {
            $this->out('Error en ejecucion: ' . $e->getMessage());
        } finally {
            // Se ejecuta SIEMPRE (incluso si ocurre un error dentro de la iteracion)
            if (file_exists($filePath)) {
                @chmod($filePath, 0777); // Otorga permisos absolutos antes de borrar
                if (!@unlink($filePath)) {
                    // Si no logra borrarlo, limpia el contenido para dejarlo en 0 bytes
                    file_put_contents($filePath, '');
                }
            }
        }
    }
}
