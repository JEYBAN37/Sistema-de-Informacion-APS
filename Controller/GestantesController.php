<?php
App::uses('AppController', 'Controller');
/**
 * Gestantes Controller
 *
 * @property Gestante $Gestante
 * @property PaginatorComponent $Paginator
 */
class GestantesController extends AppController
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
		$this->Gestante->recursive = 0;
		$this->set('gestantes', $this->Paginator->paginate());
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
		if (!$this->Gestante->exists($id)) {
			throw new NotFoundException(__('Invalid gestante'));
		}
		$options = array('conditions' => array('Gestante.' . $this->Gestante->primaryKey => $id));
		$this->set('gestante', $this->Gestante->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->Gestante->create();
			if ($this->Gestante->save($this->request->data)) {
				$this->Session->setFlash(__('The gestante has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The gestante could not be saved. Please, try again.'));
			}
		}
		$familias = $this->Gestante->Familia->find('list');
		$personas = $this->Gestante->Persona->find('list');
		$this->set(compact('familias', 'personas'));
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
		if (!$this->Gestante->exists($id)) {
			throw new NotFoundException(__('Invalid gestante'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Gestante->save($this->request->data)) {
				$this->Session->setFlash(__('The gestante has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The gestante could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Gestante.' . $this->Gestante->primaryKey => $id));
			$this->request->data = $this->Gestante->find('first', $options);
		}
		$familias = $this->Gestante->Familia->find('list');
		$personas = $this->Gestante->Persona->find('list');
		$this->set(compact('familias', 'personas'));
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
		$this->Gestante->id = $id;
		if (!$this->Gestante->exists()) {
			throw new NotFoundException(__('Invalid gestante'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Gestante->delete()) {
			$this->Session->setFlash(__('The gestante has been deleted.'));
		} else {
			$this->Session->setFlash(__('The gestante could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
