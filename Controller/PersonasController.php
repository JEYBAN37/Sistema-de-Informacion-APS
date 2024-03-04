<?php
App::uses('AppController', 'Controller');
/**
 * Personas Controller
 *
 * @property Persona $Persona
 * @property PaginatorComponent $Paginator
 */
class PersonasController extends AppController
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
		$this->Persona->find('all', array(
			'order' => array('Persona.edad' => 'asc'),
			'conditions' => array('Persona.edad BETWEEN ? AND ?' => array('14', '28')),
			'recursive' => 0
		));

		//$this->Persona->recursive = 0;
		$this->set('personas', $this->Paginator->paginate());
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
		if (!$this->Persona->exists($id)) {
			throw new NotFoundException(__('Invalid persona'));
		}
		$options = array('conditions' => array('Persona.' . $this->Persona->primaryKey => $id));
		$this->set('persona', $this->Persona->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			// Obtiene el valor de familia_id del formulario
			$familia_id = $this->request->data['Persona']['familia_id'];

			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash('El registro se ha guardado correctamente', 'default', array('class' => 'alert alert-success'));

				// Redirige al controlador 'Familias' y la acción 'ver' con el familia_id
				return $this->redirect(array('controller' => 'Familias', 'action' => 'view', $familia_id));
			} else {
				$this->Session->setFlash('No se ha guardado, por favor revisar campos', 'default', array('class' => 'alert alert-danger'));
			}
		}

		$familias = $this->Persona->Familia->find('list');
		$this->set(compact('familias'));
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
		if (!$this->Persona->exists($id)) {
			throw new NotFoundException(__('Invalid persona'));
		}

		if ($this->request->is(array('post', 'put'))) {

			if ($this->Persona->save($this->request->data)) {

				if ($this->request->data['btn'] == 'Guardar Otro') {
					//$session->setFlash("registro guardado");
					$this->Session->setFlash(__('El Plan de sesion ha sido guardado.'));
					//echo '<script> alert("registro guardado"); </script>';
					return $this->redirect(array('controller' => 'Personas', 'action' => 'add?sesion=' . $this->data["Persona"]["persona_id"]));
				} else {
					//return $this->redirect(array('controller' => 'plsesiones', 'action' => 'nuebus'));  


					return $this->redirect(array('controller' => 'familias', 'action' => 'view/' . $this->data["Persona"]["familia_id"]));
				}
			} else {
				$this->Session->setFlash(__('The plsmomento could not be saved. Please, try again.'));
			}
		}






		$familias = $this->Persona->Familia->find('list', array(
			'order' => array('Familia.id' => 'desc'),
		));

		$this->set(compact('familias'));
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
		$this->Persona->id = $id;
		if (!$this->Persona->exists()) {
			throw new NotFoundException(__('Invalid persona'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Persona->delete()) {
			$this->Session->setFlash(__('The persona has been deleted.'));
		} else {
			$this->Session->setFlash(__('The persona could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
