<?php
App::uses('AppController', 'Controller');
/**
 * Sociambientals Controller
 *
 * @property Sociambiental $Sociambiental
 * @property PaginatorComponent $Paginator
 */
class SociambientalsController extends AppController
{

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
		$this->Auth->allow('SociambientalResponsablesIndex', 'buscarCedula');
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
			$encuestadorId = $this->request->data['Sociambiental']['encuestador_id'];

			if (!empty($encuestadorId)) {
				$conditions['Sociambiental.responsable_id'] = $encuestadorId;
			}

			$ubicacionId = $this->request->data['Sociambiental']['ubicacion_id'];
			if (!empty($ubicacionId)) {
				$conditions['Sociambiental.ubicacion_id'] = $ubicacionId;
			}

			// Obtener los datos filtrados del modelo Sociambiental
			$sociambientals = $this->Sociambiental->getFamiliaSocioambientalFilter($conditions);
		} else {
			$sociambientals = array(); // Inicializar como array vacío
		}
		// Pasar las variables a la vista
		$this->set(compact('sociambientals', 'ubicacionesList', 'responsablesList'));
	}


	public function viewFilter()
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
			$encuestadorId = $this->request->data['Sociambiental']['encuestador_id'];

			if (!empty($encuestadorId)) {
				$conditions['Sociambiental.responsable_id'] = $encuestadorId;
			}

			$ubicacionId = $this->request->data['Sociambiental']['ubicacion_id'];
			if (!empty($ubicacionId)) {
				$conditions['Sociambiental.ubicacion_id'] = $ubicacionId;
			}

			// Obtener los datos filtrados del modelo Sociambiental
			$sociambientals = $this->Sociambiental->getFamiliaSocioambientalFilter($conditions);
		} else {
			$sociambientals = array(); // Inicializar como array vacío
		}
		// Pasar las variables a la vista
		$this->set(compact('sociambientals', 'ubicacionesList', 'responsablesList'));
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
		if (!$this->Sociambiental->exists($id)) {
			throw new NotFoundException(__('Invalid sociambiental'));
		}

		// Trae el registro sociambiental
		$options = array(
			'conditions' => array('Sociambiental.' . $this->Sociambiental->primaryKey => $id),
			'fields' => [
				'Sociambiental.id',
				'Sociambiental.fecha',
				'Sociambiental.direccion',
				'Sociambiental.apellidosfamilia',
				'Sociambiental.numerohogares',
				'Sociambiental.numerohabitantes',
				'Responsable.nombres',
				'Ubicacion.microterritorio',
				'Sociambiental.manzana',
				'Sociambiental.latitud',
				'Sociambiental.longitud'
			],
			'joins' => [
				[
					'table' => 'responsables',
					'alias' => 'Responsable',
					'type' => 'LEFT',
					'conditions' => ['Sociambiental.responsable_id = Responsable.id']
				],
				[
					'table' => 'ubicaciones',
					'alias' => 'Ubicacion',
					'type' => 'LEFT',
					'conditions' => ['Sociambiental.ubicacion_id = Ubicacion.id']
				]
			],
			'recursive' => -1
		);
		$sociambiental = $this->Sociambiental->find('first', $options);

		// Trae todas las familias asociadas a ese sociambiental
		$this->loadModel('Familia');
		$familias = $this->Familia->find('all', [
			'conditions' => ['Familia.sociambiental_id' => $id],
			'fields' => ['Familia.id', 'Familia.nombres', 'Familia.apellidos', 'Familia.celular', 'Familia.rol', 'Familia.numeropersonas', 'Familia.hogar'],
			'order' => ['Familia.id' => 'ASC'],
			'recursive' => -1
		]);

		$this->set(compact('sociambiental', 'familias'));
	}



	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is(array('post'))) {
			if ($this->Sociambiental->save($this->request->data)) {
				if ($this->request->data['btn'] == 'Guardar y continuar') {
					//$session->setFlash("registro guardado");
					$this->Session->setFlash('Registro se creó con éxito, continuar con información de la familia / hogar', 'flash_custom', array('class' => 'success', 'title' => 'El registro se ha completado correctamente'));					//return $this->redirect(array('action' => 'index'));
					return $this->redirect(array('controller' => 'Familias', 'action' => 'add/' . $this->Sociambiental->id));
				} else {
					$this->Session->setFlash('Registro se guardado con exito, continuar con informacion de la familia / hogar', 'flash_custom', array('class' => 'info', 'title' => 'Copia el ID de la vivienda: ' . $this->Sociambiental->id));
					//return $this->redirect(array('controller' => 'plsesiones', 'action' => 'nuebus'));                error
					return $this->redirect(array('controller' => 'Familias', 'action' => 'index'));
				}
			} else {
				$this->Session->setFlash('El registro no fue actualizado o esta pendiente un campo del formulario', 'flash_custom', array('class' => 'error', 'title' => 'Error al guardar el registro'));
			}
		}
		$ubicaciones = $this->Sociambiental->Ubicacion->getUbicacionesConFiltro();
		$this->set(compact('ubicaciones'));
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit_familia($id = null)
	{
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sociambiental->save($this->request->data)) {
				if ($this->request->data['btn'] == 'Guardar y continuar') {
					//$session->setFlash("registro guardado");
					$this->Session->setFlash('Registro se actualizo con exito, continuar con informacion de la familia / hogar', 'flash_custom', array('class' => 'success', 'title' => 'El registro se ha completado correctamente'));					//return $this->redirect(array('action' => 'index'));
					return $this->redirect(array('controller' => 'Familias', 'action' => 'view/' . $id));
				} else {
					$this->Session->setFlash('Registro se guradado con exito, continuar con informacion de la familia / hogar', 'flash_custom', array('class' => 'info', 'title' => 'Copia el ID de la vivienda: ' . $this->Sociambiental->id));
					//return $this->redirect(array('controller' => 'plsesiones', 'action' => 'nuebus'));                error
					return $this->redirect(array('controller' => 'Familias', 'action' => 'index'));
				}
			} else {
				$this->Session->setFlash('El registro no fue actualizado o esta pendiente un campo del formulario', 'flash_custom', array('class' => 'error', 'title' => 'Error al guardar el registro'));
			}
		} else {
			$this->loadModel('Familia');
			$familia = $this->Familia->find('first', [
				'conditions' => ['Familia.id' => $id],
				'fields' => ['Sociambiental.*', 'Responsable.nombres'],
				'contain' => ['Sociambiental', 'Responsable']
			]);
			$nombre = '';
			if (!empty($familia['Sociambiental'])) {

				$this->request->data['Sociambiental'] = $familia['Sociambiental'];
				$nombre = $familia['Responsable']['nombres'];

				// Si necesitas transformar los datos:
				$this->request->data = $this->Sociambiental->tranformData($this->request->data);
			} else {
				// Maneja el caso donde no se encuentra el sociambiental
				$this->Session->setFlash('No se encontró el registro socioambiental relacionado.', 'flash_custom', ['class' => 'error']);
			}
		}
		$this->set('nombre', $nombre);
		$ubicaciones = $this->Sociambiental->Ubicacion->find('list');
		$this->set(compact('responsables', 'ubicaciones'));
	}

	public function edit($id = null)
	{
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sociambiental->save($this->request->data)) {
				if ($this->request->data['btn'] == 'Guardar y continuar') {
					//$session->setFlash("registro guardado");
					$this->Session->setFlash('Registro se actualizo con exito, continuar con informacion de la familia / hogar', 'flash_custom', array('class' => 'success', 'title' => 'El registro se ha completado correctamente'));					//return $this->redirect(array('action' => 'index'));
					return $this->redirect(array('controller' => 'Familias', 'action' => 'view/' . $id));
				} else {
					$this->Session->setFlash('Registro se guradado con exito, continuar con informacion de la familia / hogar', 'flash_custom', array('class' => 'info', 'title' => 'Copia el ID de la vivienda: ' . $this->Sociambiental->id));
					//return $this->redirect(array('controller' => 'plsesiones', 'action' => 'nuebus'));                error
					return $this->redirect(array('controller' => 'Familias', 'action' => 'index'));
				}
			} else {
				$this->Session->setFlash('El registro no fue actualizado o esta pendiente un campo del formulario', 'flash_custom', array('class' => 'error', 'title' => 'Error al guardar el registro'));
			}
		} else {

			$familia = $this->Sociambiental->find('first', [
				'conditions' => ['Sociambiental.id' => $id],
				'fields' => ['Sociambiental.*', 'Responsable.nombres'],
				'contain' => ['Sociambiental', 'Responsable']
			]);
			$nombre = '';
			if (!empty($familia['Sociambiental'])) {

				$this->request->data['Sociambiental'] = $familia['Sociambiental'];
				$nombre = $familia['Responsable']['nombres'];

				// Si necesitas transformar los datos:
				$this->request->data = $this->Sociambiental->tranformData($this->request->data);
			} else {
				// Maneja el caso donde no se encuentra el sociambiental
				$this->Session->setFlash('No se encontró el registro socioambiental relacionado.', 'flash_custom', ['class' => 'error']);
			}
		}
		$this->set('nombre', $nombre);
		$ubicaciones = $this->Sociambiental->Ubicacion->find('list');
		$this->set(compact('responsables', 'ubicaciones'));
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
		$this->Sociambiental->id = $id;
		if (!$this->Sociambiental->exists()) {
			throw new NotFoundException(__('Invalid sociambiental'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Sociambiental->delete()) {
			$this->Session->setFlash(__('The sociambiental has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sociambiental could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function SociambientalResponsablesIndex()
	{
		// Configurar para respuesta JSON
		$this->autoRender = false;
		$this->layout = false;


		// Establecer headers para JSON
		header('Content-Type: application/json');

		$columns = array('Sociambiental.id');

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
						$orderBy['Sociambiental.id'] = $dir;
						break;
					case 'fecha':
						$orderBy['Sociambiental.fecha'] = $dir;
						break;
					case 'nombres':
						$orderBy['Sociambiental.apellidosfamilia'] = $dir;
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
						'Sociambiental.fecha LIKE' => "%$search%",
						'Sociambiental.id LIKE' => "%$search%",
						'Sociambiental.apellidosfamilia LIKE' => "%$search%",
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

		$total = $this->Sociambiental->find('count');
		$filtered = $this->Sociambiental->find('count', array('conditions' => $conditions));

		$data = $this->Sociambiental->find('all', array(
			'conditions' => $conditions,
			'fields' => array(
				'Sociambiental.id',
				'Sociambiental.apellidosfamilia',
				'Sociambiental.fecha',
				'Ubicacion.microterritorio',
				'Responsable.nombres'
			),
			'joins' => array(
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
				'apellidos' => isset($row['Sociambiental']['apellidosfamilia']) ? $row['Sociambiental']['apellidosfamilia'] : '',
				'microterritorio' => isset($row['Ubicacion']['microterritorio']) ? $row['Ubicacion']['microterritorio'] : '',
				'nombre_responsable' => isset($row['Responsable']['nombres']) ? $row['Responsable']['nombres'] : ''
			);
		}
		echo json_encode($result);
		exit();
	}

	public function buscarCedula($cedula)
	{

		// Configurar para respuesta JSON
		$this->autoRender = false;
		$this->layout = false;

		// Establecer headers para JSON
		header('Content-Type: application/json');

		$token = $this->getFirestoreAccessToken();

		$url = "https://firestore.googleapis.com/v1/projects/aps-run-id/databases/(default)/documents:runQuery";


		$docPath = "projects/aps-run-id/databases/(default)/documents/personas/" . $cedula;
		$body = json_encode([
			"structuredQuery" => [
				"from" => [["collectionId" => "personas"]],
				"where" => [
					"fieldFilter" => [
						"field" => ["fieldPath" => "__name__"],
						"op" => "EQUAL",
						"value" => ["referenceValue" => $docPath]
					]
				],
				"limit" => 1
			]
		]);

		$context = stream_context_create([
			"http" => [
				"method"  => "POST",
				"header"  => "Content-Type: application/json\r\nAuthorization: Bearer $token\r\n",
				"content" => $body
			]
		]);


		$result = file_get_contents($url, false, $context);
		$decoded = json_decode($result, true);

		// 🔹 Procesar los campos para quitar los tipos ("stringValue", etc.)
		$cleanData = [];
		if (isset($decoded[0]['document']['fields'])) {
			foreach ($decoded[0]['document']['fields'] as $key => $value) {
				// Cada campo tiene un solo tipo (stringValue, integerValue, etc.)
				$cleanData[$key] = reset($value);
			}
		}

		// 🔹 Devolver solo los datos limpios
		echo json_encode($cleanData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
		exit();
	}
}
