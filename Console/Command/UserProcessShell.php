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

            // Procesar en bloques de 200 para no sobrecargar el colector de basura
            $chunkSize = 200;
            $chunks = array_chunk($usuarios, $chunkSize);
            unset($usuarios); // Liberar el arreglo principal original de la memoria

            $procesados = 0;

            foreach ($chunks as $chunkIndex => $lote) {
                foreach ($lote as $usuarioData) {
                    $procesados++;

                    if (empty($usuarioData['cedula'])) {
                        continue;
                    }

                    $cedula = trim($usuarioData['cedula']);

                    // 1. Buscar ID de usuario existente (sin traer relaciones)
                    $userExistente = $this->User->find('first', [
                        'conditions' => ['User.username' => $cedula],
                        'fields'     => ['User.id'],
                        'recursive'  => -1
                    ]);

                    $userId = !empty($userExistente['User']['id']) ? $userExistente['User']['id'] : null;

                    // Eliminar si estado = 'N'
                    if (isset($usuarioData['estado']) && $usuarioData['estado'] === 'N') {
                        if ($userId) {
                            $this->User->delete($userId);
                        }
                        continue;
                    }

                    // 2. Guardar / Actualizar User
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

                    if ($this->User->save($datosUser, false)) { // false para ignorar validaciones pesadas si no son requeridas
                        // 3. Guardar / Actualizar Responsable
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

                        $respExistente = $this->Responsable->find('first', [
                            'conditions' => ['Responsable.numero' => $cedula],
                            'fields'     => ['Responsable.id'],
                            'recursive'  => -1
                        ]);

                        if (!empty($respExistente['Responsable']['id'])) {
                            $datosResponsable['id'] = $respExistente['Responsable']['id'];
                        }

                        $this->Responsable->create();
                        $this->Responsable->save($datosResponsable, false);
                    }
                }

                // --- LIBERACIÓN DE MEMORIA RÍGIDA AL FINAL DE CADA BLOQUE ---
                $db->getLog(false, true); // Vaciar log de consultas SQL acumuladas

                // Limpiar cachés internas del ORM de CakePHP
                ClassRegistry::flush();
                $this->User = ClassRegistry::init('User');
                $this->Responsable = ClassRegistry::init('Responsable');

                // Forzar al motor de PHP a recolectar basura y liberar memoria RAM
                gc_collect_cycles();

                $this->out("Procesados $procesados de $total registros... (RAM en uso: " . round(memory_get_usage() / 1024 / 1024, 2) . " MB)");
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
