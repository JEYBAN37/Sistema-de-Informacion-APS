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
	var $uses = array("Familia", "Ubicacion");
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
		$this->Auth->allow('familiasResponsablesIndex', 'testConnection', 'simpleJson');
	}

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index()
	{
		// Obtener el ID del responsable del usuario logueado
		$responsable = isset($_SESSION['Auth']['User']['responsable_id']) ? $_SESSION['Auth']['User']['responsable_id'] : '';
		// Si no hay usuario logueado, usar un valor por defecto o redirigir
		if (!$responsable) {
			$this->Session->setFlash(
				'Debes iniciar sesión para ver las estadísticas',
				'custom_flash',
				array('class' => 'warning', 'title' => 'Acceso requerido')
			);
			return $this->redirect(array('controller' => 'users', 'action' => 'login'));
		}

		$estadisticas = $this->Familia->getEstadisticasResponsable($responsable);
		$this->set('estadisticas', $estadisticas);
	}

	public function index_familias()
	{
		$estadisticas = $this->Familia->getEstadisticasResponsable(1);
		$this->set('estadisticas', $estadisticas);
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
		$options = array('conditions' => array('Familia.' . $this->Familia->primaryKey => $id));
		$this->set('familia', $this->Familia->find('first', $options));
	}

	public function plancuidado($id = null)
	{
		if (!$this->Familia->exists($id)) {
			throw new NotFoundException(__('Invalid familia'));
		}
		$options = array('conditions' => array('Familia.' . $this->Familia->primaryKey => $id));
		$this->set('familia', $this->Familia->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{

		if ($this->request->is('post')) {
			$this->Familia->create();
			if ($this->Familia->save($this->request->data)) {
				$this->Session->setFlash('Registro de hogar guradado', 'default', array('class' => 'alert alert-success'));
				//return $this->redirect(array('action' => 'index'));

				$id = $this->Familia->id;
				$aux = "view/$id";
				return $this->redirect(
					array(
						'action' => $aux,
						'?' => array('view' => 'familias'),
						'#' => 'top'
					)
				);
			} else {
				$this->Session->setFlash('No se ha guardado, por favor revisar campos', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$sociambientals = $this->Familia->Sociambiental->find('list', array('order' => array('sociambiental.id' => 'desc')));

		$this->set(compact('sociambientals'));
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
			throw new NotFoundException(__('Invalid familia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Familia->save($this->request->data)) {
				$this->Session->setFlash('Registro de hogar se actualizo correctamente', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Error al guardar.'));
			}
		} else {
			$options = array('conditions' => array('Familia.' . $this->Familia->primaryKey => $id));
			$this->request->data = $this->Familia->find('first', $options);
		}
		$sociambientals = $this->Familia->Sociambiental->find('list', array(
			'order' => array('Sociambiental.id' => 'desc')
		));

		$this->set(compact('sociambientals'));
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
		$length = isset($_GET['length']) ? intval($_GET['length']) : 5;
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
		$filtered = $this->Familia->find('count', array('conditions' => $conditions));

		$data = $this->Familia->find('all', array(
			'conditions' => $conditions,
			'fields' => array(
				'Familia.id',
				'Familia.celular',
				'Familia.apellidos',
				'Sociambiental.id',
				'Sociambiental.fecha',
				'Ubicacion.microterritorio',
				'Responsable.nombres'
			),
			'joins' => array(
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
			),
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



		foreach ($data as $row) {
			$result['data'][] = array(
				'id' => isset($row['Familia']['id']) ? $row['Familia']['id'] : '',
				'fecha' => isset($row['Sociambiental']['fecha']) ? $row['Sociambiental']['fecha'] : '',
				'sociambiental_id' => isset($row['Sociambiental']['id']) ? $row['Sociambiental']['id'] : '',
				'celular' => isset($row['Familia']['celular']) ? $row['Familia']['celular'] : '',
				'apellidos' => isset($row['Familia']['apellidos']) ? $row['Familia']['apellidos'] : '',
				'microterritorio' => isset($row['Ubicacion']['microterritorio']) ? $row['Ubicacion']['microterritorio'] : '',
				'nombre_responsable' => isset($row['Responsable']['nombres']) ? $row['Responsable']['nombres'] : ''
			);
		}
		echo json_encode($result);
		exit();
	}

	public function testConnection()
	{
		$this->autoRender = false;
		$this->layout = false;
		header('Content-Type: application/json');

		echo json_encode(array(
			'status' => 'success',
			'message' => 'El método funciona correctamente',
			'timestamp' => date('Y-m-d H:i:s'),
			'method' => 'testConnection'
		));
		exit();
	}

	public function simpleJson()
	{
		$this->autoRender = false;
		$this->layout = false;
		header('Content-Type: application/json');

		// Test básico de datos
		$familias = $this->Familia->find('all', array(
			'limit' => 5,
			'recursive' => -1
		));

		echo json_encode(array(
			'status' => 'success',
			'count' => count($familias),
			'data' => $familias,
			'message' => 'Datos recuperados correctamente'
		));
		exit();
	}
}
