<?php
App::uses('AppShell', 'Console/Command');

class UserProcessShell extends AppShell
{
    public $uses = ['User', 'Responsable'];

    public function processBatch()
    {
        $filePath = !empty($this->args[0]) ? $this->args[0] : null;

        if (!$filePath || !file_exists($filePath)) {
            $this->out("Archivo no encontrado: {$filePath}");
            return;
        }

        $usuarios = json_decode(file_get_contents($filePath), true);

        if (empty($usuarios)) {
            $this->out("El JSON se encuentra vacío.");
            return;
        }

        // Lógica de procesamiento...
        $cedulasUsuarios = array_map(function ($u) {
            return trim($u['cedula']);
        }, $usuarios);

        $usuariosExistentes = $this->User->find('list', [
            'conditions' => ['User.username' => $cedulasUsuarios],
            'fields' => ['User.username', 'User.id']
        ]);

        foreach ($usuarios as $usuarioData) {
            $cedula = trim($usuarioData['cedula']);
            $existe = array_key_exists($cedula, $usuariosExistentes);

            if (isset($usuarioData['estado']) && $usuarioData['estado'] === 'N') {
                if ($existe) {
                    $this->User->delete($usuariosExistentes[$cedula]);
                }
                continue;
            }

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
        }

        // Eliminar el JSON procesado
        @unlink($filePath);
    }
}
