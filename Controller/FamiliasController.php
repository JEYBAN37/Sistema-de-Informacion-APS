<?php
App::uses('AppController', 'Controller');
/**
 * Familias Controller
 *
 * @property Familia $Familia
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FamiliasController extends AppController
{

	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator', 'Session');

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index()
	{
		try {
			$responsables = $this->Familia->getFamiliaResponsable();
			$familias = $this->Familia->getSelectiveData();
			$sociambientals = $this->Familia->getFamiliaSocioambiental();
			$ubicaciones = $this->Familia->getUbicaciones();
			

			$this->set([
				'responsables' => $responsables,
				'familias' => $familias,
				'sociambientals' => $sociambientals,
				'ubicaciones' => $ubicaciones,
			]);

		} catch (\Exception $e) {
			$this->Flash->error('Error: ' . $e->getMessage());
		}
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
						'action' => $aux, '?' => array('view' => 'familias'), '#' => 'top'
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
}
