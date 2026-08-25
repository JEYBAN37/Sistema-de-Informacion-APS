<?php


class UsersController extends AppController
{
    //put your code here

    var $uses = array("User", "Responsable");
    var $helpers = array("Html", "Form");
    var $paginate = array("order" => "username", "limit" => 5);
    var $nivs = array("A" => "Administrador", "U" => "Investigador", "D" => "Digitador");

    /**
     * Maneja el proceso de autenticación de usuarios.
     * 
     * - Valida que la petición sea POST.
     * - Verifica que el CAPTCHA esté completo.
     * - Valida usuario y contraseña contra la base de datos.
     * - Crea la sesión del usuario autenticado.
     * - Redirige al módulo principal tras login exitoso.
     */
    function login()
    {
        if ($this->request->is('post')) {

            if (empty($this->request->data['g-recaptcha-response'])) {
                $this->Session->setFlash('Debe completar el CAPTCHA', 'flash_custom', array('class' => 'error', 'title' => 'Error al iniciar sesión'));
                return;
            }


            if ((isset($this->data)) && (!empty($this->data))) {
                $r = $this->User->find("first", array(
                    "conditions" => array(
                        "username" => $this->data["User"]["username"],
                        "password" => md5($this->data["User"]["password"])
                    )
                ));

                if (isset($r) && !empty($r)) {
                    $this->Session->write("usr", $r["User"]["username"]);
                    $this->Session->write("nvl", $r["User"]["nivel"]);



                    $responsableId = $this->Responsable->find('first', [
                        'conditions' => ['Responsable.numero' => $r['User']['username']],
                        'fields' => ['Responsable.id', 'Responsable.nombres', 'Responsable.contrato'],
                        'recursive' => -1
                    ]);

                    $auxUser = [
                        'username' => $r["User"]["username"],
                        'password' => $r["User"]["password"],
                        'group_id' => $r["User"]["group_id"],
                        'responsable_id' => isset($responsableId['Responsable']['id']) ? $responsableId['Responsable']['id'] : 169,
                        'contrato' => isset($responsableId['Responsable']['contrato']) ? $responsableId['Responsable']['contrato'] : null,
                        'nombre_responsable' => isset($responsableId['Responsable']['nombres']) ? $responsableId['Responsable']['nombres'] : 'LECTOR SISTEMA',
                    ];

                    if ($auxUser["contrato"] === 'SUSPENDIDO') {
                        $this->Session->setFlash('Su contrato se encuentra suspendido, por favor comuníquese con el administrador del sistema.', 'flash_custom', array('class' => 'error', 'title' => 'Acceso denegado'));
                        return $this->redirect(array('controller' => 'Users', 'action' => 'login'));
                    }

                    $this->Auth->login($auxUser);
                    if ($this->Session->read('Auth.User')) {
                        $this->Session->setFlash('Acceso exitoso, bienvenido', 'flash_custom',     array('class' => 'success', 'title' => 'El registro se ha completado correctamente'));

                        return $this->redirect(array('controller' => 'Familias', 'action' => 'index'));
                    }
                } else {
                    $this->Session->setFlash('Por favor verifique sus credenciales', 'flash_custom', array('class' => 'error', 'title' => 'Error al iniciar sesión'));
                }
            }

            $this->layout = 'login';
        }
    }

    /**
     * Cierra la sesión del usuario autenticado.
     * 
     * - Destruye la sesión.
     * - Cierra sesión en AuthComponent.
     * - Redirige al formulario de login.
     */
    function salir()
    {
        $this->Session->destroy();
        $this->Auth->logout();
        $this->redirect("login");
    }

    /**
     * Método ejecutado antes de cada acción del controlador.
     * 
     * - Permite acceso a todas las acciones (Auth->allow).
     * - Hereda configuración del AppController.
     */
    public function beforefilter()
    {
        parent::beforeFilter();
        $this->Auth->allow();
    }


    public function registerAll()
    {
        $this->autoRender = false;
        $this->response->type('json');

        try {
            if (!$this->request->is('post')) {
                $this->response->statusCode(405);
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Método no permitido'
                ]);
                return;
            }

            $data = $this->request->input('json_decode', true);

            if (empty($data['usuarios']) || !is_array($data['usuarios'])) {
                $this->response->statusCode(400);
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Datos JSON inválidos o lista de usuarios vacía'
                ]);
                return;
            }

            // 1. Extraer cédulas para consultar existencias
            $cedulasUsuarios = array_map(function ($usuario) {
                return trim($usuario['cedula']);
            }, $data['usuarios']);

            // 2. Buscar usuarios existentes por cédula (User.username)
            $usuariosExistentes = $this->User->find('list', [
                'conditions' => ['User.username' => $cedulasUsuarios],
                'fields' => ['User.username', 'User.id']
            ]);

            $procesados = [];

            // 3. Cargar el modelo Responsable si no está enlazado automáticamente
            if (!isset($this->Responsable)) {
                $this->loadModel('Responsable');
            }

            foreach ($data['usuarios'] as $usuarioData) {
                $cedula = trim($usuarioData['cedula']);
                $existe = array_key_exists($cedula, $usuariosExistentes);

                // Reiniciar estados de los modelos
                $this->User->create();
                $this->Responsable->create();

                // Preparar datos para el modelo User
                $datosUser = [
                    'username' => $cedula,
                    'nombre'    => isset($usuarioData['nombre']) ? strtoupper(trim($usuarioData['nombre'])) : null,
                    'nivel'     => 'D', // Nivel por defecto
                    'password' => 'Cc' . $cedula,
                    'group_id'  => 3, // Grupo por defecto
                ];

                 // borrar de usuarios 
                 if ($usuarioData['estado'] === 'N') {
                    // Si el usuario existe, eliminarlo
                    if ($existe) {
                        $this->User->delete($usuariosExistentes[$cedula]);
                        $procesados[] = [
                            'cedula' => $cedula,
                            'accion' => 'eliminado'
                        ];
                    }
                    continue; // Saltar al siguiente usuario
                }

                // Si existe, asignamos el ID para hacer UPDATE en User
                if ($existe) {
                    $datosUser['id'] = $usuariosExistentes[$cedula];
                }

                // Guardar o Actualizar Usuario
                if ($this->User->save($datosUser)) {

                    // Preparar datos para el modelo Responsable
                    $datosResponsable = [
                        'nombres'          => isset($usuarioData['nombre']) ? strtoupper(trim($usuarioData['nombre'])) : null,
                        'tipodoc'          => 'CC',
                        'numero'           => $cedula,
                        'celular'         => isset($usuarioData['telefono']) ? $usuarioData['telefono'] : null,
                        'correo'           => isset($usuarioData['correo']) ? $usuarioData['correo'] : null,
                        'profesion'        => isset($usuarioData['perfil']) ? $usuarioData['perfil'] : null,
                        'contrato'         => isset($usuarioData['contrato']) ? $usuarioData['contrato'] : null,
                        'nodo'             => isset($usuarioData['red']) ? $usuarioData['red'] : null,
                        'ebs'               => isset($usuarioData['ebs']) ? $usuarioData['ebs'] : 'PENDIENTE',
                    ];

                    // Buscar si ya existe un registro de Responsable asociado al user_id
                    $responsableExistente = $this->Responsable->find('first', [
                        'conditions' => ['Responsable.numero' => $cedula],
                        'fields' => ['Responsable.id'],
                        'recursive' => -1
                    ]);
                    if ($responsableExistente) {
                        $datosResponsable['id'] = $responsableExistente['Responsable']['id'];
                    }

                    // Guardar o Actualizar Responsable
                    $this->Responsable->save($datosResponsable);

                    $procesados[] = [
                        'cedula' => $cedula,
                        'accion' => $existe ? 'actualizado' : 'creado'
                    ];
                }
            }

            $this->response->statusCode(200);
            echo json_encode([
                'status' => 'success',
                'message' => 'Usuarios y responsables procesados correctamente',
                'data' => $procesados
            ]);
        } catch (Exception $e) {
            $this->response->statusCode(500);
            echo json_encode([
                'status' => 'error',
                'message' => 'Error interno del servidor: ' . $e->getMessage()
            ]);
        }
    }
    

    /**
     * Inicializa las reglas de ACL del sistema.
     * 
     * - Define permisos por grupo de usuarios.
     * - Grupo 1: acceso total.
     * - Grupo 2 y 3: permisos personalizados (comentados).
     * - Se ejecuta solo una vez para configurar ACL.
     */
    public function initDB()
    {
        $group = $this->User->Group;

        // Allow admins to everything
        $group->id = 1;
        $this->Acl->allow($group, 'controllers');
        //$this->Acl->allow($group, 'controllers/users/delete');
        // $this->Acl->allow($group, 'controllers/actas/delete');
        //$this->Acl->deny($group, 'controllers/Productos/smsedit');

        // allow managers to posts and widgets
        $group->id = 2;
        //$this->Acl->deny($group, 'controllers');       

        /* $this->Acl->deny($group, 'controllers/Plsesiones/edit');
       $this->Acl->deny($group, 'controllers/Plsesiones/editanexo');
       $this->Acl->deny($group, 'controllers/Plsesiones/add');
       $this->Acl->deny($group, 'controllers/infoeventos/add');  
       $this->Acl->deny($group, 'controllers/infoeventos/edit');        
       $this->Acl->deny($group, 'controllers/Procesoregistros/add');
       $this->Acl->deny($group, 'controllers/Proactividades/edit');      
       $this->Acl->deny($group, 'controllers/Procesoregistros/edit');
       $this->Acl->deny($group, 'controllers/Proactividades/add');
       $this->Acl->deny($group, 'controllers/Actividades/add');
       $this->Acl->deny($group, 'controllers/infoeventos/index');   
       $this->Acl->deny($group, 'controllers/infoeventos/editanexo'); 
       $this->Acl->deny($group, 'controllers/infoeventos/add'); 
       $this->Acl->deny($group, 'controllers/infoeventos/edit');        
       $this->Acl->deny($group, 'controllers/SistematizacionProcesosViewTests/add');       
       $this->Acl->deny($group, 'controllers/Productos/add');
       $this->Acl->deny($group, 'controllers/Productos/edit');
       $this->Acl->deny($group, 'controllers/Productos/editpic');
       $this->Acl->deny($group, 'controllers/Productos/editanexo');
       $this->Acl->deny($group, 'controllers/Users/edit');
       $this->Acl->deny($group, 'controllers/Users/admin');
       $this->Acl->deny($group, 'controllers/Users/add');
       $this->Acl->deny($group, 'controllers/Plsmomentos/edit');
       $this->Acl->deny($group, 'controllers/Plsmomentos/add');
       $this->Acl->deny($group, 'controllers/Plsmomentos/delete');*/












        // allow users to only add and edit on posts and widgets
        $group->id = 3;

        // $this->Acl->allow($group, 'controllers/familias/index');
        // $this->Acl->allow($group, 'controllers');
        /*$this->Acl->deny($group, 'controllers/familias/delete');
        $this->Acl->deny($group, 'controllers/sociambientals/delete');
        $this->Acl->deny($group, 'controllers/adolescencias/delete');
        $this->Acl->deny($group, 'controllers/canalizacions/delete');
        $this->Acl->deny($group, 'controllers/primerainfancias/delete');
        $this->Acl->deny($group, 'controllers/infancias/delete');
        $this->Acl->deny($group, 'controllers/juventudadultos/delete');
        $this->Acl->deny($group, 'controllers/responsables/delete');
        $this->Acl->deny($group, 'controllers/users/add');
        $this->Acl->deny($group, 'controllers/users/edit');
        $this->Acl->deny($group, 'controllers/users/admin');
        $this->Acl->deny($group, 'controllers/users/delete');
        $this->Acl->allow($group, 'controllers/adolescencias/edit1');
        $this->Acl->allow($group, 'controllers/primerainfancias/edit1');
        $this->Acl->allow($group, 'controllers/infancias/edit1');
        $this->Acl->allow($group, 'controllers/juventudadultos/edit1');
        $this->Acl->allow($group, 'controllers/observacions/addanexo');
        $this->Acl->allow($group, 'controllers/observacions/editanexo');*/


















        // allow basic users to log out
        //$this->Acl->allow($group, 'controllers/users/logout');

        // we add an exit to avoid an ugly "missing views" error message
        echo "all done";
        exit;
    }
}
