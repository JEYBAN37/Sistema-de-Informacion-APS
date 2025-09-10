<?php
App::uses('AppController', 'Controller');
/**
 * PersonasCaracterizadas Controller
 *
 * @property PersonasCaracterizada $PersonasCaracterizada
 * @property PaginatorComponent $Paginator
 */
class PersonasCaracterizadasController extends AppController
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
		$conditions = array();

		if ($this->request->is('post')) {
			// Verifica si se envió el campo de búsqueda
			if (!empty($this->request->data['PersonasCaracterizada']['NumeroDoc'])) {
				$numeroDoc = $this->request->data['PersonasCaracterizada']['NumeroDoc'];
				$conditions['PersonasCaracterizada.NumeroDoc'] = $numeroDoc;
			}
		}

		// Configura el paginador con las condiciones
		$this->Paginator->settings = array(
			'conditions' => $conditions,
			'fields' => array(
				'PersonasCaracterizada.familia_id',
				'PersonasCaracterizada.sociambiental_id',
				'PersonasCaracterizada.fecha',
				'PersonasCaracterizada.microterritorio',
				'PersonasCaracterizada.direccion',
				'PersonasCaracterizada.profesional_EBS',
				'PersonasCaracterizada.NumeroDoc',
				'PersonasCaracterizada.primerapellido',
				'PersonasCaracterizada.primernombre',
			),
			'recursive' => 0,
		);

		// Obtiene los resultados paginados
		$personasCaracterizadas = $this->Paginator->paginate('PersonasCaracterizada');

		// Establece la variable para la vista
		$this->set('personasCaracterizadas', $personasCaracterizadas);
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
		if (!$this->PersonasCaracterizada->exists($id)) {
			throw new NotFoundException(__('Invalid personas caracterizada'));
		}
		$options = array('conditions' => array('PersonasCaracterizada.' . $this->PersonasCaracterizada->primaryKey => $id));
		$this->set('personasCaracterizada', $this->PersonasCaracterizada->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->PersonasCaracterizada->create();
			if ($this->PersonasCaracterizada->save($this->request->data)) {
				$this->Session->setFlash(__('The personas caracterizada has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The personas caracterizada could not be saved. Please, try again.'));
			}
		}
		$familias = $this->PersonasCaracterizada->Familium->find('list');
		$sociambientals = $this->PersonasCaracterizada->Sociambiental->find('list');
		$this->set(compact('familias', 'sociambientals'));
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
		if (!$this->PersonasCaracterizada->exists($id)) {
			throw new NotFoundException(__('Invalid personas caracterizada'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PersonasCaracterizada->save($this->request->data)) {
				$this->Session->setFlash(__('The personas caracterizada has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The personas caracterizada could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PersonasCaracterizada.' . $this->PersonasCaracterizada->primaryKey => $id));
			$this->request->data = $this->PersonasCaracterizada->find('first', $options);
		}
		$familias = $this->PersonasCaracterizada->Familium->find('list');
		$sociambientals = $this->PersonasCaracterizada->Sociambiental->find('list');
		$this->set(compact('familias', 'sociambientals'));
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
		$this->PersonasCaracterizada->id = $id;
		if (!$this->PersonasCaracterizada->exists()) {
			throw new NotFoundException(__('Invalid personas caracterizada'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PersonasCaracterizada->delete()) {
			$this->Session->setFlash(__('The personas caracterizada has been deleted.'));
		} else {
			$this->Session->setFlash(__('The personas caracterizada could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
