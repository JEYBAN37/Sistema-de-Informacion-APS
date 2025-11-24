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
		$options = array('conditions' => array('Visitasnegada.' . $this->Visitasnegada->primaryKey => $id));
		$this->set('visitasnegada', $this->Visitasnegada->find('first', $options));
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
		if (!$this->Visitasnegada->exists($id)) {
			throw new NotFoundException(__('Invalid visitasnegada'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Visitasnegada->save($this->request->data)) {
				$this->Session->setFlash('Registro de Vivienda sin visista fue guardado exitosamente', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('No se ha guardado, por favor revisar campos', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Visitasnegada.' . $this->Visitasnegada->primaryKey => $id));
			$this->request->data = $this->Visitasnegada->find('first', $options);
		}
		$ubicaciones = $this->Visitasnegada->Ubicacion->find('list');
		$responsables = $this->Visitasnegada->Responsable->find('list');
		$this->set(compact('ubicaciones', 'responsables'));
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
}
