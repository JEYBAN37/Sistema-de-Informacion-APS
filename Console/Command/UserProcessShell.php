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

            $total = count($usuarios);
            $this->out("Iniciando procesamiento de $total registros...");

            $db = $this->User->getDataSource();
            $db->fullDebug = false;

            foreach ($usuarios as $index => $usuarioData) {
                if (empty($usuarioData['cedula'])) {
                    $this->out("SKIP: Registro sin cédula en índice " . $index);
                    continue;
                }

                $cedula = trim($usuarioData['cedula']);

                // Buscar ID de usuario existente usando consulta liviana
                $userExistente = $this->User->find('first', [
                    'conditions' => ['User.username' => $cedula],
                    'fields'     => ['User.id'],
                    'recursive'  => -1
                ]);

                $userId = !empty($userExistente['User']['id']) ? $userExistente['User']['id'] : null;

                // Eliminar usuario si estado = 'N'
                if (isset($usuarioData['estado']) && $usuarioData['estado'] === 'N') {
                    if ($userId) {
                        $this->User->delete($userId);
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

                if ($userId) {
                    $datosUser['id'] = $userId;
                }

                if ($this->User->save($datosUser)) {
                    // Datos para el Modelo Responsable
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

                    // Buscar ID de Responsable existente de forma directa
                    $respExistente = $this->Responsable->find('first', [
                        'conditions' => ['Responsable.numero' => $cedula],
                        'fields'     => ['Responsable.id'],
                        'recursive'  => -1
                    ]);

                    if (!empty($respExistente['Responsable']['id'])) {
                        $datosResponsable['id'] = $respExistente['Responsable']['id'];
                    }

                    $this->Responsable->create();
                    if (!$this->Responsable->save($datosResponsable)) {
                        $this->out("ERROR SAVE RESPONSABLE ($cedula): " . json_encode($this->Responsable->validationErrors));
                    }
                } else {
                    $this->out("ERROR SAVE USER ($cedula): " . json_encode($this->User->validationErrors));
                }

                // Liberar memoria RAM en cada ciclo
                unset($userExistente, $respExistente, $datosUser, $datosResponsable);

                if ($index > 0 && $index % 100 === 0) {
                    $db->getLog(false, true); // Vaciar log SQL de la RAM
                    $this->out("Procesados $index de $total registros...");
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
