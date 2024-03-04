<?php
App::uses('AppController', 'Controller');
/**
 * Responsables Controller
 *
 * @property Responsable $Responsable
 * @property PaginatorComponent $Paginator
 */
class ResponsablesController extends AppController
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
		$this->Responsable->recursive = 0;
		$this->set('responsables', $this->Paginator->paginate());
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
		if (!$this->Responsable->exists($id)) {
			throw new NotFoundException(__('Invalid responsable'));
		}
		$options = array('conditions' => array('Responsable.' . $this->Responsable->primaryKey => $id));
		$this->set('responsable', $this->Responsable->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->Responsable->create();
			if ($this->Responsable->save($this->request->data)) {
				$this->Session->setFlash(__('The responsable has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The responsable could not be saved. Please, try again.'));
			}
		}
		//$dimensiones = $this->Responsable->Dimension->find('list');
		//$this->set(compact('dimensiones'));
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
		if (!$this->Responsable->exists($id)) {
			throw new NotFoundException(__('Invalid responsable'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Responsable->save($this->request->data)) {
				$this->Session->setFlash(__('The responsable has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The responsable could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Responsable.' . $this->Responsable->primaryKey => $id));
			$this->request->data = $this->Responsable->find('first', $options);
		}
		//$dimensiones = $this->Responsable->Dimension->find('list');
		//	$this->set(compact('dimensiones'));
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
		$this->Responsable->id = $id;
		if (!$this->Responsable->exists()) {
			throw new NotFoundException(__('Invalid responsable'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Responsable->delete()) {
			$this->Session->setFlash(__('The responsable has been deleted.'));
		} else {
			$this->Session->setFlash(__('The responsable could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
