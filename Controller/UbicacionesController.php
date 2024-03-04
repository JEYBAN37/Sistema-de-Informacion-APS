<?php
App::uses('AppController', 'Controller');
/**
 * Ubicaciones Controller
 *
 * @property Ubicacion $Ubicacion
 * @property PaginatorComponent $Paginator
 */
class UbicacionesController extends AppController {

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
	public function index() {
		$this->Ubicacion->recursive = 0;
		$this->set('ubicaciones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ubicacion->exists($id)) {
			throw new NotFoundException(__('Invalid ubicacion'));
		}
		$options = array('conditions' => array('Ubicacion.' . $this->Ubicacion->primaryKey => $id));
		$this->set('ubicacion', $this->Ubicacion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ubicacion->create();
			if ($this->Ubicacion->save($this->request->data)) {
				$this->Session->setFlash(__('The ubicacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ubicacion could not be saved. Please, try again.'));
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
		if (!$this->Ubicacion->exists($id)) {
			throw new NotFoundException(__('Invalid ubicacion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ubicacion->save($this->request->data)) {
				$this->Session->setFlash(__('The ubicacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ubicacion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ubicacion.' . $this->Ubicacion->primaryKey => $id));
			$this->request->data = $this->Ubicacion->find('first', $options);
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
		$this->Ubicacion->id = $id;
		if (!$this->Ubicacion->exists()) {
			throw new NotFoundException(__('Invalid ubicacion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Ubicacion->delete()) {
			$this->Session->setFlash(__('The ubicacion has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ubicacion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
