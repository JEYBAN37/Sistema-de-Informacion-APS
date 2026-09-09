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

            // Desvincular todas las relaciones de los modelos para evitar cargas adicionales en RAM
            $this->User->unbindModel(['hasMany' => ['*'], 'belongsTo' => ['*'], 'hasOne' => ['*']], false);
            $this->Responsable->unbindModel(['hasMany' => ['*'], 'belongsTo' => ['*'], 'hasOne' => ['*']], false);

            $i = 0;
            while (!empty($usuarios)) {
                // Extraer el primer elemento reduciendo la memoria del arreglo en cada paso
                $usuarioData = array_shift($usuarios);
                $i++;

                if (empty($usuarioData['cedula'])) {
                    continue;
                }

                $cedula = trim($usuarioData['cedula']);

                // Consulta nativa directa sin hidratar objetos del ORM
                $resUser = $db->fetchAll(
                    "SELECT id FROM users WHERE username = ? LIMIT 1",
                    [$cedula]
                );
                $userId = !empty($resUser[0]['users']['id']) ? $resUser[0]['users']['id'] : null;

                // Eliminar usuario si estado = 'N'
                if (isset($usuarioData['estado']) && $usuarioData['estado'] === 'N') {
                    if ($userId) {
                        $this->User->delete($userId, false);
                    }
                    continue;
                }

                // Guardar / Actualizar User
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

                $this->User->create();
                if ($this->User->save($datosUser, false)) {
                    // Consulta nativa directa para Responsable
                    $resResp = $db->fetchAll(
                        "SELECT id FROM responsables WHERE numero = ? LIMIT 1",
                        [$cedula]
                    );
                    $respId = !empty($resResp[0]['responsables']['id']) ? $resResp[0]['responsables']['id'] : null;

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

                    if ($respId) {
                        $datosResponsable['id'] = $respId;
                    }

                    $this->Responsable->create();
                    $this->Responsable->save($datosResponsable, false);
                }

                // Limpieza periódica cada 100 registros
                if ($i % 100 === 0) {
                    $db->getLog(false, true); // Vaciar histórico de consultas
                    ClassRegistry::flush();   // Liberar caché interna de modelos
                    gc_collect_cycles();       // Forzar liberación de RAM por PHP
                    $this->out("Procesados $i de $total registros... (RAM: " . round(memory_get_usage() / 1024 / 1024, 2) . " MB)");
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
