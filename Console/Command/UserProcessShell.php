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
            $this->out("Iniciando procesamiento nativo de $total registros...");

            // Obtener la conexión PDO pura de PHP (evita la sobrecarga de Mysql.php)
            $db = $this->User->getDataSource();
            $pdo = $db->getConnection();

            // Preparar Sentencias SQL Directas
            $stmtFindUser = $pdo->prepare("SELECT id FROM users WHERE username = ? LIMIT 1");
            $stmtDeleteUser = $pdo->prepare("DELETE FROM users WHERE id = ?");
            $stmtInsertUser = $pdo->prepare("INSERT INTO users (username, nombre, nivel, password, group_id) VALUES (?, ?, 'D', ?, 3)");
            $stmtUpdateUser = $pdo->prepare("UPDATE users SET nombre = ? WHERE id = ?");

            $stmtFindResp = $pdo->prepare("SELECT id FROM responsables WHERE numero = ? LIMIT 1");
            $stmtInsertResp = $pdo->prepare("INSERT INTO responsables (nombres, tipodoc, numero, celular, correo, profesion, contrato, nodo, ebs) VALUES (?, 'CC', ?, ?, ?, ?, ?, ?, ?)");
            $stmtUpdateResp = $pdo->prepare("UPDATE responsables SET nombres = ?, celular = ?, correo = ?, profesion = ?, contrato = ?, nodo = ?, ebs = ? WHERE id = ?");

            $i = 0;
            while (!empty($usuarios)) {
                // array_shift elimina el elemento procesado y libera RAM progresivamente
                $usuarioData = array_shift($usuarios);
                $i++;

                if (empty($usuarioData['cedula'])) {
                    continue;
                }

                $cedula = trim($usuarioData['cedula']);
                $nombre = isset($usuarioData['nombre']) ? strtoupper(trim($usuarioData['nombre'])) : null;
                $telefono = isset($usuarioData['telefono']) ? $usuarioData['telefono'] : null;
                $correo = isset($usuarioData['correo']) ? $usuarioData['correo'] : null;
                $perfil = isset($usuarioData['perfil']) ? $usuarioData['perfil'] : null;
                $contrato = isset($usuarioData['contrato']) ? $usuarioData['contrato'] : null;
                $red = isset($usuarioData['red']) ? $usuarioData['red'] : null;
                $ebs = isset($usuarioData['ebs']) ? $usuarioData['ebs'] : 'PENDIENTE';

                // 1. Verificar si el usuario existe
                $stmtFindUser->execute([$cedula]);
                $user = $stmtFindUser->fetch(PDO::FETCH_ASSOC);
                $userId = $user ? $user['id'] : null;

                // Si estado = 'N', eliminar
                if (isset($usuarioData['estado']) && $usuarioData['estado'] === 'N') {
                    if ($userId) {
                        $stmtDeleteUser->execute([$userId]);
                    }
                    continue;
                }

                // 2. Insertar o Actualizar Usuario
                if ($userId) {
                    $stmtUpdateUser->execute([$nombre, $userId]);
                } else {
                    // Generar la contraseña con MD5
                    $passwordMD5 = md5('Cc' . $cedula);

                    $stmtInsertUser->execute([$cedula, $nombre, $passwordMD5]);
                    $userId = $pdo->lastInsertId();
                }

                // 3. Insertar o Actualizar Responsable
                $stmtFindResp->execute([$cedula]);
                $resp = $stmtFindResp->fetch(PDO::FETCH_ASSOC);
                $respId = $resp ? $resp['id'] : null;

                if ($respId) {
                    $stmtUpdateResp->execute([$nombre, $telefono, $correo, $perfil, $contrato, $red, $ebs, $respId]);
                } else {
                    $stmtInsertResp->execute([$nombre, $cedula, $telefono, $correo, $perfil, $contrato, $red, $ebs]);
                }

                // Liberación periódica de la basura de PHP
                if ($i % 500 === 0) {
                    gc_collect_cycles();
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
