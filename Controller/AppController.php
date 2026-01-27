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
                'conditions' => ['Responsable.contrato' => 'ACTIVO'],
                'recursive' => -1
            ]);
            debug($responsables);
            Cache::write($cacheKey, $responsables, 'selects');
        }

        return $responsables;
    }

    protected function getResponsablesSelectCompletos()
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



    protected function getParametros($personas = null, $zarit = false)
    {
        $cacheKey = 'parametros_select';
        $parametrosFiltrados = Cache::read($cacheKey, 'selects');

        if ($parametrosFiltrados === false) {

            $this->loadModel('Parametro');
            if (!isset($this->Parametro) || !is_object($this->Parametro)) {
                $this->Parametro = ClassRegistry::init('Parametro');
            }
            if (!$this->Parametro) {
                CakeLog::write('error', 'No se pudo cargar el modelo Parametro en AppController::getParametros');
                return [];
            }

            $parametrosRaw = $this->Parametro->find('list', [
                'fields' => ['Parametro.indicador', 'Parametro.resultado', 'Parametro.curso'],
                'recursive' => -1
            ]);


            // Inicializar cursos de vida aplicables
            $cursosVidaAplicables = [];
            $fechaActual = new DateTime();

            // Calcular edades y determinar cursos de vida
            if ($personas && is_array($personas)) {
                foreach ($personas as $persona) {
                    if (!empty($persona['Juventudadulto']['fechanac'])) {
                        $fechaNacimiento = new DateTime($persona['Juventudadulto']['fechanac']);
                        $diferencia = $fechaActual->diff($fechaNacimiento);
                        $edadEnAnios = $diferencia->y;

                        // Obtener cursos de vida para esta edad
                        $cursosParaEsta = $this->_obtenerCursosVidaParaEdad($edadEnAnios, $persona['Juventudadulto']['gestacion']);
                        foreach ($cursosParaEsta as $curso) {
                            if (!in_array($curso, $cursosVidaAplicables)) {
                                $cursosVidaAplicables[] = $curso;
                            }
                        }
                    }
                }
            }

            // Si hay cuidador (zarit), agregar "SOLO AL CUIDADOR"
            if ($zarit === true || $zarit === 'Si' || $zarit === 1 || $zarit === '1') {
                if (!in_array('SOLO AL CUIDADOR', $cursosVidaAplicables)) {
                    $cursosVidaAplicables[] = 'SOLO AL CUIDADOR';
                }
            }


            // Si no hay personas ni zarit, retornar array vacío
            if (empty($cursosVidaAplicables)) {
                return [];
            }

            // Filtrar parámetros cruzando cursos de vida con estructura anidada


            // Recorrer cada curso de vida aplicable
            foreach ($cursosVidaAplicables as $cursoAplicable) {
                // Buscar el curso en la estructura anidada (con y sin espacios)
                foreach ($parametrosRaw as $cursoKey => $indicadores) {
                    if (trim($cursoKey) === $cursoAplicable && is_array($indicadores)) {
                        // Agregar todos los indicadores de este curso
                        foreach ($indicadores as $indicador => $resultado) {
                            if (!isset($parametrosFiltrados[$indicador])) {
                                $parametrosFiltrados[$indicador] = $resultado;
                            }
                        }
                    }
                }
            }
            Cache::write($cacheKey, $parametrosFiltrados, 'selects');
        }



        return $parametrosFiltrados;
    }

    /**
     * Obtiene los cursos de vida que aplican para una edad específica.
     * 
     * @param int $edad Edad en años
     * @return array Array de cursos de vida aplicables
     */
    protected function _obtenerCursosVidaParaEdad($edad, $gestacion = null)
    {
        $cursos = [];

        if ($edad >= 0 && $edad <= 5) {
            $cursos[] = 'PRIMERA INFANCIA';
            $cursos[] = 'PRIMERA INFANCIA E INFANCIA';
            $cursos[] = 'PRIMERA INFANCIA E INFANCIA ADOLESCENCIA';
            $cursos[] = 'TODOS CURSOS DE VIDA';
            $cursos[] = '1 VEZ EN CURSO DE VIDA';
            $cursos[] = 'INFANCIA ADOLESCENCIA JUVENTUD ADULTEZ Y VEJ';
        } elseif ($edad >= 6 && $edad <= 11) {
            $cursos[] = 'INFANCIA';
            $cursos[] = 'PRIMERA INFANCIA E INFANCIA';
            $cursos[] = 'PRIMERA INFANCIA E INFANCIA ADOLESCENCIA';
            $cursos[] = 'INFANCIA ADOLESCENCIA';
            $cursos[] = 'TODOS CURSOS DE VIDA';
            $cursos[] = '1 VEZ EN CURSO DE VIDA';
            $cursos[] = 'INFANCIA ADOLESCENCIA JUVENTUD ADULTEZ Y VEJ';
        } elseif ($edad >= 12 && $edad <= 17) {
            $cursos[] = 'ADOLESCENCIA';
            $cursos[] = 'ADOLESCENCIA JUVENTUD ADULTEZ Y VEJEZ';
            $cursos[] = 'ADOLESCENCIA JUVENTUD ADULTEZ';
            $cursos[] = 'PRIMERA INFANCIA E INFANCIA ADOLESCENCIA';
            $cursos[] = 'INFANCIA ADOLESCENCIA';
            $cursos[] = 'INFANCIA ADOLESCENCIA JUVENTUD ADULTEZ Y VEJ';
            $cursos[] = 'TODOS CURSOS DE VIDA';
            $cursos[] = '1 VEZ EN CURSO DE VIDA';
        } elseif ($edad >= 18 && $edad <= 26) {
            $cursos[] = 'JUVENTUD';
            $cursos[] = 'JUVENTUD ADULTEZ';
            $cursos[] = 'JUVENTUD ADULTEZ Y VEJEZ';
            $cursos[] = 'ADOLESCENCIA JUVENTUD ADULTEZ Y VEJEZ';
            $cursos[] = 'ADOLESCENCIA JUVENTUD ADULTEZ';
            $cursos[] = 'INFANCIA ADOLESCENCIA JUVENTUD ADULTEZ Y VEJ';
            $cursos[] = 'TODOS CURSOS DE VIDA';
            $cursos[] = '1 VEZ EN CURSO DE VIDA';
        } elseif ($edad >= 27 && $edad <= 59) {
            $cursos[] = 'ADULTEZ';
            $cursos[] = 'ADULTEZ Y VEJEZ';
            $cursos[] = 'JUVENTUD ADULTEZ Y VEJEZ';
            $cursos[] = 'ADOLESCENCIA JUVENTUD ADULTEZ Y VEJEZ';
            $cursos[] = 'ADOLESCENCIA JUVENTUD ADULTEZ';
            $cursos[] = 'INFANCIA ADOLESCENCIA JUVENTUD ADULTEZ Y VEJ';
            $cursos[] = 'TODOS CURSOS DE VIDA';
            $cursos[] = '1 VEZ EN CURSO DE VIDA';
        } elseif ($edad >= 60) {
            $cursos[] = 'VEJEZ';
            $cursos[] = 'ADULTEZ Y VEJEZ';
            $cursos[] = 'JUVENTUD ADULTEZ Y VEJEZ';
            $cursos[] = 'ADOLESCENCIA JUVENTUD ADULTEZ Y VEJEZ';
            $cursos[] = 'INFANCIA ADOLESCENCIA JUVENTUD ADULTEZ Y VEJ';
            $cursos[] = 'TODOS CURSOS DE VIDA';
            $cursos[] = '1 VEZ EN CURSO DE VIDA';
        }
        if ($gestacion === 'Si' || $gestacion === 1 || $gestacion === '1') {
            $cursos[] = 'GESTANTE';
            $cursos[] = 'TODOS CURSOS DE VIDA';
            $cursos[] = '1 VEZ EN CURSO DE VIDA';
        }


        return $cursos;
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

    protected function loadHistorial($data)
    {
        $this->loadModel('Intervecion');
        $this->Intervecion->create();
        $this->Intervecion->save($data);
    }

    protected function userCurrent()
    {
        $r = $this->Auth->user();
        $responsable = $r['responsable_id'];
        return $responsable;
    }
}
