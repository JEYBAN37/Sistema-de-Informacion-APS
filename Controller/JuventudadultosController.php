<?php
App::uses('AppController', 'Controller');
/**
 * Juventudadultos Controller
 *
 * @property Juventudadulto $Juventudadulto
 * @property PaginatorComponent $Paginator
 * @property Intervecion $Intervecion
 */
class JuventudadultosController extends AppController
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
		$this->Juventudadulto->recursive = 0;

		$count = $this->Juventudadulto->find('count');
		$this->Paginator->settings['limit'] = $count;

		$this->set('juventudadultos', $this->paginate());
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
		if (!$this->Juventudadulto->exists($id)) {
			throw new NotFoundException(__('Invalid juventudadulto'));
		}
		$options = array('conditions' => array('Juventudadulto.' . $this->Juventudadulto->primaryKey => $id));
		$this->set('juventudadulto', $this->Juventudadulto->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->Juventudadulto->create();
			$id_familia = $this->request->data['Juventudadulto']['familia_id'];
			debug($this->request->data);
			if ($this->Juventudadulto->save($this->request->data)) {
				if ($this->request->data['btn'] == 'Guardar y agregar integrante') {
					$this->Session->setFlash('Registro de familia se guradado con exito, continuar con informacion del siguiente integrante', 'flash_custom', array('class' => 'success', 'title' => 'El registro se ha completado correctamente'));
					return $this->redirect(array('controller' => 'Juventudadultos', 'action' => 'add?familia=', $id_familia));
				}

				if ($this->request->data['btn'] == 'ver familia') {
					$this->Session->setFlash('Registro de Persona se guradado con exito', 'flash_custom', array('class' => 'success', 'title' => 'El registro se ha completado correctamente'));
					return $this->redirect(array('controller' => 'Familias', 'action' => 'view', $id_familia));
				}

			} else {
				$this->Session->setFlash('El registro no fue guardado o esta pendiente un campo del formulario', 'flash_custom', array('class' => 'error', 'title' => 'Error al guardar el registro'));
			}
		}

		$familias = $this->Juventudadulto->Familia->find('list');
		$canalizaciones = $this->Juventudadulto->Canalizacion->find('list');

		$this->set(compact('familias',  'canalizaciones', 'intervenciones'));
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
		if (!$this->Juventudadulto->exists($id)) {
			throw new NotFoundException(__('Invalid juventudadulto'));
		}

		if ($this->request->is(array('post', 'put'))) {
			if ($this->Juventudadulto->save($this->request->data)) {
				$this->Session->setFlash('Se ha guardado correctamente', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('controller' => 'familias', 'action' => 'view/' . $this->data["Juventudadulto"]["familia_id"]));
			} else {
				$this->Session->setFlash('No se ha guardado, por favor revisar campos', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Juventudadulto.' . $this->Juventudadulto->primaryKey => $id));
			$this->request->data = $this->Juventudadulto->find('first', $options);
			$this->request->data = $this->Juventudadulto->tranformData($this->request->data);

		}

		$canalizaciones = $this->Juventudadulto->Canalizacion->find('list');
		$this->set(compact('canalizaciones', 'intervenciones'));
	}

	public function edit1($id = null)
	{
		if (!$this->Juventudadulto->exists($id)) {
			throw new NotFoundException(__('Invalid juventudadulto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Juventudadulto->save($this->request->data)) {
				$this->Session->setFlash('Se ha guardado correctamente', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('No se ha guardado, por favor revisar campos', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Juventudadulto.' . $this->Juventudadulto->primaryKey => $id));
			$this->request->data = $this->Juventudadulto->find('first', $options);
		}

		$familias = $this->Juventudadulto->Familia->find('list');
		$canalizaciones = $this->Juventudadulto->Canalizacion->find('list');
		$this->set(compact('familias', 'canalizaciones'));
	}

	public function seguimiento($id = null)
	{
		if (!$this->Juventudadulto->exists($id)) {
			throw new NotFoundException(__('Invalid juventudadulto'));
		}

		if ($this->request->is(array('post', 'put'))) {
			// Obtener el valor de canalizacion_id del formulario
			$canalizacionId = $this->request->data['Juventudadulto']['canalizacion_id'];

			if ($this->Juventudadulto->save($this->request->data)) {
				$this->Session->setFlash('Se ha guardado correctamente', 'default', array('class' => 'alert alert-success'));

				// Redirigir a la vista de la Canalizacion
				return $this->redirect(array(
					'controller' => 'canalizacions',
					'action' => 'view',
					$canalizacionId
				));
			} else {
				$this->Session->setFlash('No se ha guardado, por favor revisar campos', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Juventudadulto.' . $this->Juventudadulto->primaryKey => $id));
			$this->request->data = $this->Juventudadulto->find('first', $options);
		}

		$familias = $this->Juventudadulto->Familia->find('list');
		$canalizaciones = $this->Juventudadulto->Canalizacion->find('list');
		$this->set(compact('familias', 'canalizaciones'));
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
		$this->Juventudadulto->id = $id;
		if (!$this->Juventudadulto->exists()) {
			throw new NotFoundException(__('Invalid juventudadulto'));
		}
		// Obtener el familia_id antes de eliminar
		$familiaId = $this->Juventudadulto->field('familia_id');
		$this->request->allowMethod('post', 'delete');
		if ($this->Juventudadulto->delete()) {
			$this->Session->setFlash('El registro se borro exitosamente', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('El registro se borro exitosamente', 'default', array('class' => 'alert alert-danger'));
		}
		// Redirigir al controller "familias" y a la acci�n "view" con el familia_id
		return $this->redirect(array('controller' => 'familias', 'action' => 'view', $familiaId));
	}
}



