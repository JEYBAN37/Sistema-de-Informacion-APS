<?php
App::uses('AppController', 'Controller');
/**
 * Primerainfancias Controller
 *
 * @property Primerainfancia $Primerainfancia
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PrimerainfanciasController extends AppController
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
		$this->Primerainfancia->recursive = 0;
		$this->set('primerainfancias', $this->Paginator->paginate());
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
		if (!$this->Primerainfancia->exists($id)) {
			throw new NotFoundException(__('Invalid primerainfancia'));
		}
		$options = array('conditions' => array('Primerainfancia.' . $this->Primerainfancia->primaryKey => $id));
		$this->set('primerainfancia', $this->Primerainfancia->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->Primerainfancia->create();
			if ($this->Primerainfancia->save($this->request->data)) {
				$this->Session->setFlash(__('The primerainfancia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The primerainfancia could not be saved. Please, try again.'));
			}
		}
		$personas = $this->Primerainfancia->Persona->find('list');
		$familias = $this->Primerainfancia->Familium->find('list');
		$canalizaciones = $this->Primerainfancia->Canalizacion->find('list');
		$this->set(compact('personas', 'familias', 'canalizaciones'));
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
		if (!$this->Primerainfancia->exists($id)) {
			throw new NotFoundException(__('Invalid primerainfancia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Primerainfancia->save($this->request->data)) {
				$this->Session->setFlash(__('The primerainfancia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The primerainfancia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Primerainfancia.' . $this->Primerainfancia->primaryKey => $id));
			$this->request->data = $this->Primerainfancia->find('first', $options);
		}
		$personas = $this->Primerainfancia->Persona->find('list');
		$familias = $this->Primerainfancia->Familium->find('list');
		$canalizaciones = $this->Primerainfancia->Canalizacion->find('list');
		$this->set(compact('personas', 'familias', 'canalizaciones'));
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
		$this->Primerainfancia->id = $id;
		if (!$this->Primerainfancia->exists()) {
			throw new NotFoundException(__('Invalid primerainfancia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Primerainfancia->delete()) {
			$this->Session->setFlash(__('The primerainfancia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The primerainfancia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
