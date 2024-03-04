<?php
App::uses('AppController', 'Controller');
/**
 * Canalizaciones Controller
 *
 * @property Canalizacion $Canalizacion
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CanalizacionesController extends AppController {

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
	public function index() {
		$this->Canalizacion->recursive = 0;
		$this->set('canalizaciones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Canalizacion->exists($id)) {
			throw new NotFoundException(__('Invalid canalizacion'));
		}
		$options = array('conditions' => array('Canalizacion.' . $this->Canalizacion->primaryKey => $id));
		$this->set('canalizacion', $this->Canalizacion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Canalizacion->create();
			if ($this->Canalizacion->save($this->request->data)) {
				$this->Session->setFlash(__('The canalizacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The canalizacion could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Canalizacion->exists($id)) {
			throw new NotFoundException(__('Invalid canalizacion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Canalizacion->save($this->request->data)) {
				$this->Session->setFlash(__('The canalizacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The canalizacion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Canalizacion.' . $this->Canalizacion->primaryKey => $id));
			$this->request->data = $this->Canalizacion->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Canalizacion->id = $id;
		if (!$this->Canalizacion->exists()) {
			throw new NotFoundException(__('Invalid canalizacion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Canalizacion->delete()) {
			$this->Session->setFlash(__('The canalizacion has been deleted.'));
		} else {
			$this->Session->setFlash(__('The canalizacion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
