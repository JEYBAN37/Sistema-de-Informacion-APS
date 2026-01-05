<?php
App::uses('AppController', 'Controller');
App::uses('Configure', 'Core');
/**
 * Familias Controller
 *
 * @property Familia $Familia
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FamiliasController extends AppController
{
	var $uses = array("Familia", "Ubicacion", "Sociambiental", "Responsable");
	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator', 'Session');

	public function beforeFilter()
	{
		parent::beforeFilter();
		// Permitir acceso a métodos JSON sin autenticación
		$this->Auth->allow('familiasResponsablesIndex', 'familiaIndex');
	}

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index()
	{
		$responsable = $this->Auth->user('responsable_id');

		if (empty($responsable)) {
			$this->Session->setFlash(
				'Debes iniciar sesión para ver las estadísticas',
				'custom_flash',
				array('class' => 'warning', 'title' => 'Acceso requerido')
			);
			return $this->redirect(array('controller' => 'users', 'action' => 'login'));
		}

		$cacheKey = 'estadisticas_responsable_' . $responsable;

		$estadisticas = Cache::read($cacheKey, 'default');

		if ($estadisticas === false) {
			$estadisticas = $this->Familia->getEstadisticasResponsable($responsable);
			Cache::write($cacheKey, $estadisticas, 'default');
		}

		$this->set('estadisticas', $estadisticas);
	}


	public function index_familias() {}

	private function mergeIntegrantes($ficha)
	{
		$integrantes = [];

		foreach (['Juventudadulto', 'Primerainfancia', 'Infantil', 'Adolescencia'] as $tipo) {
			if (!empty($ficha[$tipo])) {
				foreach ($ficha[$tipo] as $item) {
					$integrantes[] = $item;
				}
			}
		}

		return $integrantes;
	}

	private function calcularEdades(array $integrantes)
	{
		$hoy = time();

		foreach ($integrantes as &$integrante) {
			if (!empty($integrante['fechanac'])) {
				$integrante['edad'] = floor(
					($hoy - strtotime($integrante['fechanac'])) / 31556926
				);
			} else {
				$integrante['edad'] = null;
			}
		}
		unset($integrante);

		return $integrantes;
	}



	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null)
	{
		if (!$this->Familia->exists($id)) {
			throw new NotFoundException(__('Invalid familia'));
		}

		$ficha = $this->Familia->find('first', array(
			'conditions' => array('Familia.' . $this->Familia->primaryKey => $id),
			'fields' => array('Familia.id, Familia.apellidos, Familia.cursovidafamilia, Familia.nombres, Familia.celular, Familia.numeropersonas, Familia.poblacionvulnerable'),
			'contain' => array(
				'Juventudadulto' => array( // <-- Esto trae los registros relacionados por familia_id
					'fields' => array('id', 'primernombre', 'segundonombre', 'primerapellido', 'segundoapellido', 'fechanac', 'sexo', 'aseguradora', 'canalizacionuno', 'condicioncronica')
				),
				'Primerainfancia' =>
				array( // <-- Esto trae los registros relacionados por familia_id
					'fields' => array('id', 'primernombre', 'segundonombre', 'primerapellido', 'segundoapellido', 'fechanac', 'sexo', 'aseguradora', 'canalizacionuno', 'condicioncronica')
				),
				'Infantil' =>
				array('id', 'primernombre', 'segundonombre', 'primerapellido', 'segundoapellido', 'fechanac', 'sexo', 'aseguradora', 'canalizacionuno', 'condicioncronica'),
				'Adolescencia' =>
				array(
					'fields' => array('id', 'primernombre', 'segundonombre', 'primerapellido', 'segundoapellido', 'fechanac', 'sexo', 'aseguradora', 'canalizacionuno', 'condicioncronica')
				),
				'Sociambiental' => array(
					'fields' => array('id', 'fecha', 'apellidosfamilia', 'direccion', 'numerohogares', 'longitud', 'latitud', 'barriovereda')
				),
				'Ubicacion' => array(
					'fields' => array('microterritorio', 'cod_microterritorio')
				),
				'Responsable' => array(
					'fields' => array('nombres')
				),
				'Observacion' => array(
					'fields' => array('id', 'observacion', 'valoracionfamilia', 'canalizacionuno', 'resultadoFamiliograma', 'resultadoEcomapa', 'dirplancuidado', 'dirfamiliograma', 'fecha', 'familiograma', 'firmaplancuidado', 'plancuidado')
				)
			)
		));


		if (empty($ficha['Observacion'])) {
			unset($ficha['Observacion']);
		}


		$ficha['Integrantes'] = $this->mergeIntegrantes($ficha);
		$ficha['Integrantes'] = $this->calcularEdades($ficha['Integrantes']);

		if (empty($ficha['Integrantes'])) {
			$this->Session->setFlash('No hay integrantes registrados para esta familia.', 'flash_custom', array('class' => 'warning', 'title' => 'Información'));
		}

		unset(
			$ficha['Juventudadulto'],
			$ficha['Primerainfancia'],
			$ficha['Infantil'],
			$ficha['Adolescencia']
		);

		$this->set('familia', $ficha);
	}

	public function plancuidado($id = null)
	{
		if (!$this->Familia->exists($id)) {
			$this->Session->setFlash('La familia no existe', 'flash_custom', array('class' => 'error', 'title' => 'Error al cargar el registro'));
			return $this->redirect(array('controller' => 'Familias', 'action' => 'index'));
		}

		$ficha = $this->Familia->find('first', array(
			'conditions' => array('Familia.' . $this->Familia->primaryKey => $id),
			'fields' => array('
			Familia.*'),
			'contain' => array(
				'Juventudadulto' => array( // <-- Esto trae los registros relacionados por familia_id
					'fields' => array('id', 'primernombre', 'segundonombre', 'primerapellido', 'segundoapellido', 'fechanac', 'sexo', 'aseguradora', 'canalizacionuno', 'condicioncronica')
				),
				'Sociambiental' => array(
					'fields' => array(
						'id',
						'fecha',
						'apellidosfamilia',
						'direccion',
						'numerohogares',
						'longitud',
						'latitud',
						'barriovereda',
						'vivienda',
						'actividad',
						'estadoparedes',
						'estadotecho',
						'hacinamiento',
						'riesgoexterno',
						'riesgo',
						'acceso',
						'aguaservicio',
						'aguatratamiento',
						'aguasiministro',
						'aguaresiduales',
						'diposicionexcretas',
						'reciclaje',
						'numeroPerros',
						'numeroGatos',
						'mascotas',
						'desparasitamascotas',
						'cuidadomascotas',
						'vacunamascotas',
					)
				),
				'Ubicacion' => array(
					'fields' => array('microterritorio', 'cod_microterritorio')
				),
				'Responsable' => array(
					'fields' => array('nombres', 'profesion', 'id')
				),
				'Observacion' => array(
					'fields' => array(
						'responsable_id',
						'familia_id',
						'resultadoEcomapa',
						'resultadoFamiliograma',
						'date',
						'id',
						'menoresriegosalud',
						'riesgovulnerabilidad',
						'puntuacionfamilia',
						'valoracionfamilia',
						'fortalezas',
						'objetivocortoplazo',
						'objetivolargoplazo',
						'entornoafectado',
						'indicadorria',
						'observacionesplancuidado',
						'firmaplancuidado',
						'responsables',
						'actividaddesarrollar',
						'disentimiento'
					)
				)
			)
		));


		$ficha = $this->Familia->tranformData($ficha);

		$idsResponsables = [];

		if (!empty($ficha['Observacion'][0]['responsables'])) {
			$idsResponsables = array_map('trim', explode(',', $ficha['Observacion'][0]['responsables']));
		}

		$responsables = [];

		if (!empty($idsResponsables)) {
			$responsablesData = $this->Responsable->find('all', array(
				'conditions' => array('Responsable.id' => $idsResponsables),
				'fields' => array('Responsable.id', 'Responsable.nombres', 'Responsable.profesion'),
				'recursive' => -1
			));

			foreach ($responsablesData as $resp) {
				$id = $resp['Responsable']['id'];
				$responsables[$id] = array(
					'nombre' => $resp['Responsable']['nombres'],
					'profesion' => $resp['Responsable']['profesion']
				);
			}
		}

		// Procesar el campo 'responsables' en Observacion para convertir IDs a nombres con profesión
		if (!empty($ficha['Observacion'][0]['responsables'])) {
			$idsResponsables = explode(',', $ficha['Observacion'][0]['responsables']);
			$responsablesCompletos = array();

			foreach ($idsResponsables as $idResp) {
				$idResp = trim($idResp);
				if (isset($responsables[$idResp])) {
					$responsablesCompletos[] = array(
						'nombre' => $responsables[$idResp]['nombre'],
						'profesion' => $responsables[$idResp]['profesion']
					);
				}
			}

			// Reemplazar con array de responsables completos
			$ficha['Observacion'][0]['responsables'] = $responsablesCompletos;
		}

		$this->set('familia', $ficha);
		unset($responsablesData, $idsResponsables);
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add($sociambientals_id)
	{
		if ($this->request->is('post')) {
			$this->request->data['Familia']['sociambiental_id'] = $sociambientals_id;
			if ($this->Familia->save($this->request->data)) {
				if ($this->request->data['btn'] == 'Guardar y continuar') {
					$this->Session->setFlash('Registro de familia se guradado con exito, continuar con informacion de los integrantes', 'flash_custom', array('class' => 'success', 'title' => 'El registro se ha completado correctamente'));
					return $this->redirect(array('controller' => 'Juventudadultos', 'action' => 'add?familia=', $this->Familia->id));
				}

				if ($this->request->data['btn'] == 'ver familia') {
					$this->Session->setFlash('Registro de familia se guradado con exito, continuar con informacion de los integrantes', 'flash_custom', array('class' => 'success', 'title' => 'El registro se ha completado correctamente'));
					return $this->redirect(array('controller' => 'Familias', 'action' => 'view', $this->Familia->id));
				}

				if ($this->request->data['btn'] == 'Ver Vivienda') {
					$this->Session->setFlash('Registro de familia se guradado con exito, puede agregar un nuevo registro', 'flash_custom', array('class' => 'success', 'title' => 'El registro se ha completado correctamente'));
					return $this->redirect(array('controller' => 'Sociambientals', 'action' => 'view', $sociambientals_id));
				}
			} else {
				$this->Session->setFlash('El registro no fue guardado o esta pendiente un campo del formulario', 'flash_custom', array('class' => 'error', 'title' => 'Error al guardar el registro'));
			}
		}
	}


	public function addnew()
	{

		if ($this->request->is('post')) {
			$this->Familia->create();
			if ($this->Familia->save($this->request->data)) {
				$this->Session->setFlash(__('The familia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Error al guardar.'));
			}
		}
		$sociambientals = $this->Familia->Sociambiental->find('list', array('order' => array('sociambiental.id' => 'desc')));

		$this->set(compact('sociambientals'));
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null)
	{
		if (!$this->Familia->exists($id)) {
			$this->Session->setFlash('La familia no existe', 'flash_custom', array('class' => 'error', 'title' => 'Error al cargar el registro'));
			return $this->redirect(array('controller' => 'Familias', 'action' => 'index'));
		}


		if ($this->request->is(array('post', 'put'))) {
			if ($this->Familia->save($this->request->data)) {
				if ($this->request->data['btn'] == 'Guardar') {
					//$session->setFlash("registro guardado");
					$this->Session->setFlash('Registro se actualizo con exito, continuar con informacion de la familia / hogar', 'flash_custom', array('class' => 'success', 'title' => 'El registro se ha completado correctamente'));					//return $this->redirect(array('action' => 'index'));
					return $this->redirect(array('controller' => 'Familias', 'action' => 'view/' . $id));
				}

				if ($this->request->data['btn'] == 'ver familia') {
					$this->Session->setFlash('Registro de familia se guradado con exito, continuar con informacion de los integrantes', 'flash_custom', array('class' => 'success', 'title' => 'El registro se ha completado correctamente'));
					return $this->redirect(array('controller' => 'Familias', 'action' => 'view', $this->Familia->id));
				}

				if ($this->request->data['btn'] == 'Ver Vivienda') {
					$this->Session->setFlash('Registro de familia se guradado con exito, puede agregar un nuevo registro', 'flash_custom', array('class' => 'success', 'title' => 'El registro se ha completado correctamente'));
					return $this->redirect(array('controller' => 'Sociambientals', 'action' => 'view', $this->request->data['Familia']['sociambiental_id']));
				}
			} else {
				$this->Session->setFlash('El registro no fue guardado o esta pendiente un campo del formulario', 'flash_custom', array('class' => 'error', 'title' => 'Error al guardar el registro'));
			}
		} else {
			$familia = $this->Familia->find('first', [
				'conditions' => array('Familia.id' => $id),
				'recursive' => -1
			]);

			if (!empty($familia)) {
				// Si se encuentra la familia, asignarla a la solicitud

				$this->request->data = $this->Familia->tranformData($familia);
			} else {
				// Si no se encuentra, mostrar un mensaje de error
				$this->Session->setFlash('No se encontró la familia con el ID proporcionado.', 'flash_custom', array('class' => 'error', 'title' => 'Error'));
				return $this->redirect(array('action' => 'index'));
			}
		}
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null)
	{
		$this->Familia->id = $id;
		if (!$this->Familia->exists()) {
			throw new NotFoundException(__('Invalid familia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Familia->delete()) {
			$this->Session->setFlash(__('The familia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The familia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function familiasResponsablesIndex()
	{
		// Configurar para respuesta JSON
		$this->autoRender = false;
		$this->layout = false;


		// Establecer headers para JSON
		header('Content-Type: application/json');

		$columns = array('Familia.id');

		$start = isset($_GET['start']) ? intval($_GET['start']) : 0;
		$length = isset($_GET['length']) ? intval($_GET['length']) : 3;
		$search = isset($_GET['search']['value']) ? $_GET['search']['value'] : '';
		$microterritorio = isset($_GET['microterritorio']) ? $_GET['microterritorio'] : '';
		$fecha = isset($_GET['fecha']) ? $_GET['fecha'] : '';
		$order = isset($_GET['order']) ? $_GET['order'] : array();
		$columns = isset($_GET['columns']) ? $_GET['columns'] : array();

		$orderBy = array();
		if (!empty($order)) {
			foreach ($order as $o) {
				$colIndex = intval($o['column']); // índice de la columna
				$colName = $columns[$colIndex]['data']; // nombre definido en JS (columns: [])
				$dir = strtoupper($o['dir']) === 'DESC' ? 'DESC' : 'ASC';

				// Mapear a las columnas reales de la BD
				switch ($colName) {
					case 'id':
						$orderBy['Familia.id'] = $dir;
						break;
					case 'fecha':
						$orderBy['Sociambiental.fecha'] = $dir;
						break;
					case 'nombres':
						$orderBy['Familia.nombres'] = $dir;
						break;
					case 'apellidos':
						$orderBy['Familia.apellidos'] = $dir;
						break;
					case 'celular':
						$orderBy['Familia.celular'] = $dir;
						break;
					case 'sociambiental_id':
						$orderBy['Sociambiental.id'] = $dir;
						break;
					case 'microterritorio':
						$orderBy['Ubicacion.microterritorio'] = $dir;
						break;
					default:
						// Por defecto ordenar por fecha más reciente
						$orderBy['Sociambiental.fecha'] = 'DESC';
				}
			}
		} else {
			// Si no hay orden especificado, ordenar por fecha más reciente
			$orderBy = array('Sociambiental.fecha' => 'DESC');
		}

		$conditions = array();
		// Obtener responsable usando Auth o Session (fallback a $_SESSION si hace falta)
		$r = $this->Auth->user();
		$responsable = $r['responsable_id'];

		// debug($responsable); // activar si necesita depurar
		if (!empty($search)) {
			if (!empty($responsable)) {
				// responsable es obligatoria (AND), el resto es OR
				$conditions['AND'] = array(
					'Responsable.id' => intval($responsable),
					'OR' => array(
						'Familia.id LIKE' => "%$search%",
						'Sociambiental.fecha LIKE' => "%$search%",
						'Sociambiental.id LIKE' => "%$search%",
						'Familia.celular LIKE' => "%$search%",
						'Familia.apellidos LIKE' => "%$search%",
						'Ubicacion.microterritorio LIKE' => "%$search%",
					)
				);
			}
		} else if (!empty($microterritorio) || !empty($fecha)) {
			if (!empty($microterritorio)) {
				$conditions['Ubicacion.microterritorio'] = intval($microterritorio);
			}
			if (!empty($fecha)) {
				$conditions['Sociambiental.fecha'] = $fecha;
			}
		} else {
			$conditions['Responsable.id'] = intval($responsable);
		}

		$total = $this->Familia->find('count');


		$joins = array(
			array(
				'table' => 'sociambientals',
				'alias' => 'Sociambiental',
				'type' => 'LEFT',
				'conditions' => array('Familia.sociambiental_id = Sociambiental.id')
			),
			array(
				'table' => 'ubicaciones',
				'alias' => 'Ubicacion',
				'type' => 'LEFT',
				'conditions' => array('Sociambiental.ubicacion_id = Ubicacion.id')
			),
			array(
				'table' => 'responsables',
				'alias' => 'Responsable',
				'type' => 'LEFT',
				'conditions' => array('Sociambiental.responsable_id = Responsable.id')
			)
		);

		// Solo si se necesita el conteo
		$joins[] = array(
			'table' => 'juventudadultos',
			'alias' => 'Juventudadulto',
			'type' => 'LEFT',
			'conditions' => array('Juventudadulto.familia_id = Familia.id')
		);


		$filtered = $this->Familia->find('count', array(
			'conditions' => $conditions,
			'joins' => array(
				$joins[0],
				$joins[1],
				$joins[2],
			),
			'distinct' => 'Familia.id',
			'recursive' => -1,
		));



		$group = array(
			'Familia.id',
			'Familia.celular',
			'Familia.apellidos',
			'Familia.numeropersonas',
			'Sociambiental.id',
			'Sociambiental.fecha',
			'Ubicacion.microterritorio',
			'Responsable.nombres'
		);

		$data = $this->Familia->find('all', array(
			'conditions' => $conditions,
			'fields' => array(
				'Familia.id',
				'Familia.celular',
				'Familia.apellidos',
				'Sociambiental.id',
				'Sociambiental.fecha',
				'Ubicacion.microterritorio',
				'Responsable.nombres',
				'CONCAT(Familia.numeropersonas, "/", COUNT(Juventudadulto.id)) AS integrantes'
			),
			'joins' => $joins,
			'group' => $group,
			'limit' => $length,
			'offset' => $start,
			'order' => $orderBy,
			'recursive' => -1,
		));

		$draw = isset($_GET['draw']) ? intval($_GET['draw']) : 0;

		$result = array(
			"draw" => $draw,
			"recordsTotal" => $total,
			"recordsFiltered" => $filtered,
			"data" => array()
		);


		$result['data'] = array();
		foreach ($data as $row) {
			$result['data'][] = array(
				'id' => isset($row['Familia']['id']) ? $row['Familia']['id'] : '',
				'fecha' => isset($row['Sociambiental']['fecha']) ? $row['Sociambiental']['fecha'] : '',
				'sociambiental_id' => isset($row['Sociambiental']['id']) ? $row['Sociambiental']['id'] : '',
				'celular' => isset($row['Familia']['celular']) ? $row['Familia']['celular'] : '',
				'apellidos' => isset($row['Familia']['apellidos']) ? $row['Familia']['apellidos'] : '',
				'microterritorio' => isset($row['Ubicacion']['microterritorio']) ? $row['Ubicacion']['microterritorio'] : '',
				'integrantes' => isset($row[0]['integrantes']) ? $row[0]['integrantes'] : '',
				'responsable'  => isset($row['Responsable']['nombres']) ? $row['Responsable']['nombres'] : '',
			);
		}

		unset($data);
		echo json_encode($result);
		exit();
	}


	public function index_general() {}
}
