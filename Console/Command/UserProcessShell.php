<?php
App::uses('AppShell', 'Console/Command');

class UserProcessShell extends AppShell
{
    public $uses = ['User', 'Responsable'];

    public function processBatch()
    {
        ini_set('memory_limit', '1024M');
        set_time_limit(0);

        $filePath = !empty($this->args[0]) ? $this->args[0] : null;

        if (!$filePath || !file_exists($filePath)) {
            $this->out("ERROR: Archivo no proporcionado o no existe: " . $filePath);
            return;
        }

        try {
            $rawContent = file_get_contents($filePath);
            $usuarios = json_decode($rawContent, true);

            if (empty($usuarios) || !is_array($usuarios)) {
                $this->out("ERROR: El JSON está vacío o con formato inválido.");
                return;
            }

            $this->out("Iniciando procesamiento de " . count($usuarios) . " registros...");

            $db = $this->User->getDataSource();
            $db->fullDebug = false;

            // 1. Extraer todas las cédulas para consultas masivas
            $cedulasUsuarios = array_filter(array_map(function ($u) {
                return isset($u['cedula']) ? trim($u['cedula']) : null;
            }, $usuarios));

            // 2. Pre-cargar Usuarios existentes
            $usuariosExistentes = $this->User->find('list', [
                'conditions' => ['User.username' => $cedulasUsuarios],
                'fields'     => ['User.username', 'User.id'],
                'recursive'  => -1
            ]);

            // 3. Pre-cargar Responsables existentes (Evita hacer find en cada iteración)
            $responsablesExistentes = $this->Responsable->find('list', [
                'conditions' => ['Responsable.numero' => $cedulasUsuarios],
                'fields'     => ['Responsable.numero', 'Responsable.id'],
                'recursive'  => -1
            ]);

            foreach ($usuarios as $index => $usuarioData) {
                if (empty($usuarioData['cedula'])) {
                    $this->out("SKIP: Registro sin cédula en índice " . $index);
                    continue;
                }

                $cedula = trim($usuarioData['cedula']);
                $existeUser = array_key_exists($cedula, $usuariosExistentes);

                // Eliminar usuario si estado = 'N'
                if (isset($usuarioData['estado']) && $usuarioData['estado'] === 'N') {
                    if ($existeUser) {
                        $this->User->delete($usuariosExistentes[$cedula]);
                        $this->out("ELIMINADO: Usuario $cedula");
                    }
                    continue;
                }

                // Guardar / Actualizar User
                $this->User->create();
                $datosUser = [
                    'username' => $cedula,
                    'nombre'   => isset($usuarioData['nombre']) ? strtoupper(trim($usuarioData['nombre'])) : null,
                    'nivel'    => 'D',
                    'password' => 'Cc' . $cedula,
                    'group_id' => 3,
                ];

                if ($existeUser) {
                    $datosUser['id'] = $usuariosExistentes[$cedula];
                }

                if ($this->User->save($datosUser)) {
                    // Guardar / Actualizar Responsable
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

                    if (array_key_exists($cedula, $responsablesExistentes)) {
                        $datosResponsable['id'] = $responsablesExistentes[$cedula];
                    }

                    if (!$this->Responsable->save($datosResponsable)) {
                        $this->out("ERROR SAVE RESPONSABLE ($cedula): " . json_encode($this->Responsable->validationErrors));
                    }
                } else {
                    $this->out("ERROR SAVE USER ($cedula): " . json_encode($this->User->validationErrors));
                }

                if ($index > 0 && $index % 50 === 0) {
                    $db->getLog(false, true);
                    $this->out("Procesados $index registros...");
                }
            }

            $this->out("PROCESO COMPLETADO EXITOSAMENTE.");
        } catch (Exception $e) {
            $this->out("EXCEPCION FATAL: " . $e->getMessage() . " en la línea " . $e->getLine());
        } finally {
            if (file_exists($filePath)) {
                @chmod($filePath, 0777);
                if (!@unlink($filePath)) {
                    file_put_contents($filePath, '');
                }
            }
        }
    }
}
