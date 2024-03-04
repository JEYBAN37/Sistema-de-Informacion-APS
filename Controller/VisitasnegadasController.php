<?php
App::uses('AppController', 'Controller');
/**
 * Visitasnegadas Controller
 *
 * @property Visitasnegada $Visitasnegada
 * @property PaginatorComponent $Paginator
 */
class VisitasnegadasController extends AppController {

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
		$this->Visitasnegada->recursive = 0;

		$count = $this->Visitasnegada->find('count');
		$this->Paginator->settings['limit'] = $count;

		$this->set(
			"visitasnegadas",
			$this->paginate()
		);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
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
	public function add() {
		if ($this->request->is('post')) {
			$this->Visitasnegada->create();
			if ($this->Visitasnegada->save($this->request->data)) {
				$this->Session->setFlash('Registro de Vivienda sin visista fue guardado exitosamente', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('No se ha guardado, por favor revisar campos', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$ubicaciones = $this->Visitasnegada->Ubicacion->find('list');
		$responsables = $this->Visitasnegada->Responsable->find('list');
		$this->set(compact('ubicaciones', 'responsables'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
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
	public function delete($id = null) {
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
