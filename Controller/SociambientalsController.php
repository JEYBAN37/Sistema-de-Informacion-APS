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
	public $components = array('Paginator');

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
		$options = array('conditions' => array('Sociambiental.' . $this->Sociambiental->primaryKey => $id));
		$this->set('sociambiental', $this->Sociambiental->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->Sociambiental->create();
			debug($this->request->data);
			if ($this->Sociambiental->save($this->request->data)) {

				if ($this->request->data['btn'] == 'Guardar y continuar') {
					//$session->setFlash("registro guardado");
					$this->Session->setFlash('Registro se guradado con exito, continuar con informacion de la familia / hogar', 'default', array('class' => 'alert alert-success'));
					//return $this->redirect(array('action' => 'index'));
					return $this->redirect(array('controller' => 'Familias', 'action' => 'add?hogar=' . $this->Sociambiental->id));
				} else {
					$this->Session->setFlash('Registro se guradado con exito, continuar con informacion de la familia / hogar', 'default', array('class' => 'alert alert-success'));

					//return $this->redirect(array('controller' => 'plsesiones', 'action' => 'nuebus'));                
					return $this->redirect(array('controller' => 'Sociambientals', 'action' => 'index'));
				}
			} else {
				$this->Session->setFlash('El registro no fue guardado o esta pendiente un campo del formulario', 'default', array('stylerror' => 'alert alert-danger'));
			}
		}
		$responsables = $this->Sociambiental->Responsable->find('list');
		$ubicaciones = $this->Sociambiental->Ubicacion->getUbicacionesConFiltro();
		$this->set(compact('responsables', 'ubicaciones', $ubicaciones));
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
		if (!$this->Sociambiental->exists($id)) {
			throw new NotFoundException(__('Invalid sociambiental'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sociambiental->save($this->request->data)) {
				$this->Session->setFlash('Registro se guradado con exito', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('controller' => 'Sociambientals', 'action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Sociambiental.' . $this->Sociambiental->primaryKey => $id));
			$this->request->data = $this->Sociambiental->find('first', $options);
			$this->request->data = $this->Sociambiental->tranformData($this->request->data);
		}
		$responsables = $this->Sociambiental->Responsable->find('list');
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
}
