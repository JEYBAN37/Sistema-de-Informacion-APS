<?php
App::uses('AppController', 'Controller');
/**
 * Visitasnegadas Controller
 *
 * @property Visitasnegada $Visitasnegada
 * @property PaginatorComponent $Paginator
 */
class VisitasnegadasController extends AppController
{

	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator');

	public function beforeFilter()
	{
		parent::beforeFilter();
		// Permitir acceso a métodos JSON sin autenticación
		$this->Auth->allow('VisitasNegadasResponsableIndex', 'buscarCedula');
	}

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index()
	{
		$this->loadModel('Responsable'); // Cargar el modelo Responsable
		$this->loadModel('Ubicacion'); // Cargar el modelo Ubicacion

		// Obtener listado de responsables (para mostrar en un select)
		$responsablesList = $this->Responsable->find('list', array(
			'fields' => array('id', 'nombres'), // Ajusta los campos según tu modelo Responsable
			'order' => 'nombres'
		));

		// Obtener listado de ubicaciones (si aplica)
		$ubicacionesList = $this->Ubicacion->find('list', array(
			'fields' => array('id', 'microterritorio'), // Ajusta los campos según tu modelo de Ubicación
			'order' => 'microterritorio'
		));

		$conditions = array();

		if ($this->request->is(['post', 'put'])) {
			$encuestadorId = $this->request->data['Visitasnegada']['encuestador_id'];

			if (!empty($encuestadorId)) {
				$conditions['visitasnegada.responsable_id'] = $encuestadorId;
			}

			$ubicacionId = $this->request->data['Visitasnegada']['ubicacion_id'];
			if (!empty($ubicacionId)) {
				$conditions['visitasnegada.ubicacion_id'] = $ubicacionId;
			}

			// Obtener los datos filtrados del modelo Sociambiental
			$visitasNegadas = $this->Visitasnegada->getFamiliaNegadasFilter($conditions);
		} else {
			$visitasNegadas = array(); // Inicializar como array vacío
		}
		// Pasar las variables a la vista
		$this->set(compact('visitasNegadas', 'ubicacionesList', 'responsablesList'));
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
		if (!$this->Visitasnegada->exists($id)) {
			throw new NotFoundException(__('Invalid visitasnegada'));
		}
		$options = array(
			'conditions' => array('Visitasnegada.' . $this->Visitasnegada->primaryKey => $id),
			'fields' => array(
				'Visitasnegada.id',
				'Visitasnegada.estadocasa',
				'Visitasnegada.fecha',
				'Visitasnegada.telefono',
				'Visitasnegada.nombreshabitante',
				'Visitasnegada.numerodocumento',
				'Visitasnegada.direccion',
				'Visitasnegada.observacion',
				'Visitasnegada.barriovereda',
				'Ubicacion.microterritorio',
				'Responsable.nombres',
				'Responsable.profesion',
				'Responsable.celular'
			),
		);
		$Visitasnegada = $this->Visitasnegada->find(
			'first',
			$options
		);

		$this->set('visitasnegada', $Visitasnegada);
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			if ($this->Visitasnegada->save($this->request->data)) {
				if ($this->request->data['btn'] == 'Guardar y continuar') {
					//$session->setFlash("registro guardado");
					$this->Session->setFlash('Registro se creó con éxito, continuar con información de la Novedad / hogar', 'flash_custom', array('class' => 'success', 'title' => 'El registro se ha completado correctamente'));					//return $this->redirect(array('action' => 'index'));
					return $this->redirect(array('controller' => 'Visitasnegadas', 'action' => 'index'));
				} else {
					$this->Session->setFlash('Registro se guardado con exito, continuar con informacion de la Novedad / hogar', 'flash_custom', array('class' => 'info', 'title' => 'Copia el ID de la vivienda: ' . $this->Sociambiental->id));
					//return $this->redirect(array('controller' => 'plsesiones', 'action' => 'nuebus'));                error
					return $this->redirect(array('controller' => 'Visitasnegadas', 'action' => 'index'));
				}
			} else {
				$this->Session->setFlash('El registro no fue actualizado o esta pendiente un campo del formulario', 'flash_custom', array('class' => 'error', 'title' => 'Error al guardar el registro'));
			}
		}

		$ubicaciones = $this->Visitasnegada->Ubicacion->getUbicacionesConFiltro('list');

		$this->set(compact('ubicaciones'));
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
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Visitasnegada->save($this->request->data)) {
				if ($this->request->data['btn'] == 'Guardar y continuar') {
					//$session->setFlash("registro guardado");
					$this->Session->setFlash('Registro se actualizo con exito, continuar con informacion de la familia / hogar', 'flash_custom', array('class' => 'success', 'title' => 'El registro se ha completado correctamente'));					//return $this->redirect(array('action' => 'index'));
					$this->redirect(array('controller' => 'Visitasnegadas', 'action' => 'index'));
				}
			} else {
				$this->Session->setFlash('El registro no fue actualizado o esta pendiente un campo del formulario', 'flash_custom', array('class' => 'error', 'title' => 'Error al guardar el registro'));
			}
		} else {
			$options = array('conditions' => array('Visitasnegada.' . $this->Visitasnegada->primaryKey => $id));
			$this->request->data = $this->Visitasnegada->find('first', $options);
		}

		$ubicaciones = $this->Visitasnegada->Ubicacion->getUbicacionesConFiltro('list');
		$this->set(compact('ubicaciones'));
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
		$this->Visitasnegada->id = $id;
		if (!$this->Visitasnegada->exists()) {
			throw new NotFoundException(__('Invalid visitasnegada'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Visitasnegada->delete()) {
			$this->Session->setFlash(__('The visitasnegada has been deleted.'));
		} else {
			$this->Session->setFlash(__('The visitasnegada could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function VisitasNegadasResponsableIndex()
	{
		// Configurar para respuesta JSON
		$this->autoRender = false;
		$this->layout = false;


		// Establecer headers para JSON
		header('Content-Type: application/json');

		$columns = array('Visitasnegada.id');

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
						$orderBy['Visitasnegada.id'] = $dir;
						break;
					case 'fecha':
						$orderBy['Visitasnegada.fecha'] = $dir;
						break;
					case 'nombres':
						$orderBy['Visitasnegada.estadocasa'] = $dir;
						break;
					case 'microterritorio':
						$orderBy['Ubicacion.microterritorio'] = $dir;
						break;
					default:
						// Por defecto ordenar por fecha más reciente
						$orderBy['Visitasnegada.fecha'] = 'DESC';
				}
			}
		} else {
			// Si no hay orden especificado, ordenar por fecha más reciente
			$orderBy = array('Visitasnegada.fecha' => 'DESC');
		}

		$conditions = array();

		// debug($responsable); // activar si necesita depurar
		if (!empty($search)) {

			// responsable es obligatoria (AND), el resto es OR
			$conditions['AND'] = array(
				'Responsable.id' => intval($responsable),
				'OR' => array(
					'Visitasnegada.fecha LIKE' => "%$search%",
					'Visitasnegada.id LIKE' => "%$search%",
					'Visitasnegada.telefono LIKE' => "%$search%",
					'Visitasnegada.estadocasa LIKE' => "%$search%",
					'Ubicacion.microterritorio LIKE' => "%$search%",
				)
			);
		} else if (!empty($microterritorio) || !empty($fecha)) {
			if (!empty($microterritorio)) {
				$conditions['Ubicacion.microterritorio'] = intval($microterritorio);
			}
			if (!empty($fecha)) {
				$conditions['Visitasnegada.fecha'] = $fecha;
			}
		} 
		
		$total = $this->Visitasnegada->find('count');
		$filtered = $this->Visitasnegada->find('count', array('conditions' => $conditions));

		$data = $this->Visitasnegada->find('all', array(
			'conditions' => $conditions,
			'fields' => array(
				'Visitasnegada.id',
				'Visitasnegada.estadocasa',
				'Visitasnegada.fecha',
				'Visitasnegada.telefono',
				'Ubicacion.microterritorio',
				'Responsable.nombres'
			),
			'joins' => array(
				array(
					'table' => 'ubicaciones',
					'alias' => 'Ubicacion',
					'type' => 'LEFT',
					'conditions' => array('Visitasnegada.ubicacion_id = Ubicacion.id')
				),
				array(
					'table' => 'responsables',
					'alias' => 'Responsable',
					'type' => 'LEFT',
					'conditions' => array('Visitasnegada.responsable_id = Responsable.id')
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
				'id' => isset($row['Visitasnegada']['id']) ? $row['Visitasnegada']['id'] : '',
				'fecha' => isset($row['Visitasnegada']['fecha']) ? $row['Visitasnegada']['fecha'] : '',
				'telefono' => isset($row['Visitasnegada']['telefono']) ? $row['Visitasnegada']['telefono'] : '',
				'estadocasa' => isset($row['Visitasnegada']['estadocasa']) ? $row['Visitasnegada']['estadocasa'] : '',
				'microterritorio' => isset($row['Ubicacion']['microterritorio']) ? $row['Ubicacion']['microterritorio'] : '',
				'nombre_responsable' => isset($row['Responsable']['nombres']) ? $row['Responsable']['nombres'] : ''
			);
		}
		echo json_encode($result);
		exit();
	}
}
