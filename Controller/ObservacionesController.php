<?php
App::uses('AppController', 'Controller');
/**
 * Observaciones Controller
 *
 * @property Observacion $Observacion
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ObservacionesController extends AppController {

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
		$this->Observacion->recursive = 0;
		$this->set('observaciones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Observacion->exists($id)) {
			throw new NotFoundException(__('Invalid observacion'));
		}
		$options = array('conditions' => array('Observacion.' . $this->Observacion->primaryKey => $id));
		$this->set('observacion', $this->Observacion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Observacion->create();
			if ($this->Observacion->save($this->request->data)) {
				$this->Session->setFlash(__('The observacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The observacion could not be saved. Please, try again.'));
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
		if (!$this->Observacion->exists($id)) {
			throw new NotFoundException(__('Invalid observacion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Observacion->save($this->request->data)) {
				$this->Session->setFlash(__('The observacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The observacion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Observacion.' . $this->Observacion->primaryKey => $id));
			$this->request->data = $this->Observacion->find('first', $options);
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
		$this->Observacion->id = $id;
		if (!$this->Observacion->exists()) {
			throw new NotFoundException(__('Invalid observacion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Observacion->delete()) {
			$this->Session->setFlash(__('The observacion has been deleted.'));
		} else {
			$this->Session->setFlash(__('The observacion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
