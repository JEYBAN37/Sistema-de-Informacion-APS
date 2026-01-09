<?php

App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
App::uses('Controller', 'Controller');


class AppController extends Controller
{

    /**
     * Componentes globales del controlador. @property Intervecion $Intervecion
     * 
     * - RequestHandler: Maneja peticiones HTTP (AJAX, JSON, etc.).
     * - Session: Manejo de sesiones del usuario.
     * - Paginator: Paginación de resultados.
     * - Acl: Control de listas de acceso (ACL).
     * - Auth: Autenticación y autorización de usuarios.
     */
    public $components = array(
        'RequestHandler',
        'Session',
        'Paginator',
        'Acl',
        'Auth' => array(
            'authorize' => array(
                'Acl.Actions' => array('actionPath' => 'controllers', 'userModel' => 'Users')
            ),
            array(
                'authenticate' => array(
                    'Form' => array(
                        'passwordHasher' => 'md5'
                        //'passwordHasher' => array(
                        //    'className' => 'Simple',
                        //    'hashType' => 'md5'
                        //)
                    )
                )
            )
        ),
    );

    /**
     * Se ejecuta antes de cada acción del controlador.
     * 
     * - Configura el sistema de autenticación (Auth).
     * - Define acciones de login y logout.
     * - Permite acceso público a login y logout.
     * - Ejecuta la validación de inactividad del usuario.
     */
    function beforeFilter()
    {
        parent::beforeFilter();

        $this->Auth->authenticate = array(
            'Form' => array(
                'fields' => array(
                    'username' => 'username',
                    'password' => 'password'
                )
            )
        );

        $this->Auth->authorize = array('Controller');

        $this->Auth->loginAction = array(
            'controller' => 'users',
            'action' => 'login'
        );

        $this->Auth->logoutRedirect = array(
            'controller' => 'users',
            'action' => 'login'
        );

        $this->Auth->allow('login', 'logout');

        $this->_checkInactivity();
    }

        /**
     * Se ejecuta justo antes de renderizar la vista.
     * 
     * Útil para enviar variables globales a las vistas
     * o realizar ajustes finales antes del render.
     */
    function beforeRender()
    {
        parent::beforeRender();
    }

    /**
     * Define si un usuario está autorizado a acceder a una acción.
     * 
     * @param array $user Datos del usuario autenticado.
     * @return bool Retorna false por defecto (acceso denegado).
     */
    public function isAuthorized($user)
    {
        // Default deny
        return true;
    }

    /**
     * Maneja filtros de búsqueda persistentes por usuario.
     * 
     * - Guarda filtros en sesión por usuario.
     * - Recupera filtros almacenados si no hay datos enviados.
     * - Permite mantener filtros entre páginas (paginación).
     * 
     * @return array|null Retorna los filtros activos o null.
     */
    public function _filter()
    {
        $uid = $this->Auth->user('id');
        //        if (!$this->params['named']['page']) {
        //            $this->Session->delete($this->name . $uid);
        //        }
        if (!empty($this->request->data)) {
            $search = $this->request->data;
        } elseif ($this->Session->check($this->name . $uid)) {
            $search = $this->Session->read($this->name . $uid);
        }
        if (isset($search)) {
            $this->Session->write($this->name . $uid, $search);
            return $search;
        }
        return null;
    }

    /**
     * Obtiene un access token para Google Firestore usando
     * una Service Account (JWT).
     * 
     * - Genera un JWT firmado con la clave privada.
     * - Solicita un token OAuth2 a Google.
     * 
     * @return string Access token para consumir Firestore.
     */
    function getFirestoreAccessToken()
    {
        $json = json_decode(file_get_contents(APP . 'Config/serviceAccount.json'), true);

        $header = base64_encode(json_encode([
            'alg' => 'RS256',
            'typ' => 'JWT'
        ]));

        $iat = time();
        $exp = $iat + 3600;

        $claim = base64_encode(json_encode([
            'iss' => $json['client_email'],
            'scope' => 'https://www.googleapis.com/auth/datastore',
            'aud' => 'https://oauth2.googleapis.com/token',
            'exp' => $exp,
            'iat' => $iat
        ]));

        $signature = '';
        openssl_sign("$header.$claim", $signature, $json['private_key'], 'SHA256');
        $jwt = "$header.$claim." . base64_encode($signature);

        $response = file_get_contents('https://oauth2.googleapis.com/token', false, stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
                'content' => http_build_query([
                    'grant_type' => 'urn:ietf:params:oauth:grant-type:jwt-bearer',
                    'assertion' => $jwt
                ])
            ]
        ]));

        $data = json_decode($response, true);
        return $data['access_token'];
    }

    /**
     * Obtiene un listado de ubicaciones para usar en un <select>.
     * 
     * - Usa caché para mejorar el rendimiento.
     * - Consulta la tabla Ubicacion si no existe en caché.
     * 
     * @return array Listado de ubicaciones (id => microterritorio).
     */
    protected function getUbicacionesSelect()
    {
        $cacheKey = 'ubicaciones_select';
        $ubicaciones = Cache::read($cacheKey, 'selects');

        if ($ubicaciones === false) {
            $this->loadModel('Ubicacion');
            $ubicaciones = $this->Ubicacion->find('list', [
                'fields' => ['Ubicacion.id', 'Ubicacion.microterritorio'],
                'recursive' => -1
            ]);
            Cache::write($cacheKey, $ubicaciones, 'selects');
        }

        return $ubicaciones;
    }

    /**
     * Obtiene un listado de responsables para usar en un <select>.
     * 
     * - Usa caché para evitar consultas repetidas.
     * - Consulta la tabla Responsable si no existe en caché.
     * 
     * @return array Listado de responsables (id => nombres).
     */
    protected function getResponsablesSelect()
    {
        $cacheKey = 'responsables_select';
        $responsables = Cache::read($cacheKey, 'selects');

        if ($responsables === false) {
            $this->loadModel('Responsable');
            $responsables = $this->Responsable->find('list', [
                'fields' => ['Responsable.id', 'Responsable.nombres'],
                'recursive' => -1
            ]);
            Cache::write($cacheKey, $responsables, 'selects');
        }

        return $responsables;
    }

    /**
     * Verifica la inactividad del usuario autenticado.
     * 
     * - Si el usuario supera el tiempo máximo de inactividad,
     *   se cierra la sesión automáticamente.
     * - Redirige al login con un mensaje de advertencia.
     * - Actualiza el tiempo de última actividad en cada request.
     */
    protected function _checkInactivity()
    {
        if (
            $this->request->controller === 'users' &&
            $this->request->action === 'login'
        ) {
            return;
        }


        $user = $this->Auth->user();

        if (!$user) {
            return;
        }

        $now = time();
        $lastActivity = $this->Session->read('Auth.lastActivity');

        if ($lastActivity) {
            $limit = Configure::read('Session.inactivityLimit');

            if (($now - $lastActivity) > $limit) {
                // sesión expirada por inactividad
                $this->Auth->logout();
                $this->Session->destroy();

                $this->Session->setFlash(
                    'Tu sesión expiró por inactividad',
                    'default',
                    array('class' => 'alert alert-warning')
                );

                return $this->redirect($this->Auth->loginAction);
            }
        }

        // actualizar actividad
        $this->Session->write('Auth.lastActivity', $now);
    }

    protected function loadHistorial($data) {
        $this->loadModel('Intervecion');
        $this->Intervecion->create();
        $this->Intervecion->save($data);
    }

    protected function userCurrent() {
        $r = $this->Auth->user();
		$responsable = $r['responsable_id'];
        return $responsable;
    }

}
