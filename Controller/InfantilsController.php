<?php
App::uses('AppController', 'Controller');
/**
 * Infantils Controller
 *
 * @property Infantil $Infantil
 * @property PaginatorComponent $Paginator
 */
class InfantilsController extends AppController
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
		$this->Infantil->recursive = 0;
		$this->set('infantils', $this->Paginator->paginate());
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
		if (!$this->Infantil->exists($id)) {
			throw new NotFoundException(__('Invalid infantil'));
		}
		$options = array('conditions' => array('Infantil.' . $this->Infantil->primaryKey => $id));
		$this->set('infantil', $this->Infantil->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->Infantil->create();
			$fechaNacimiento = $this->request->data['Infantil']['fechanac'];
			$edad = $this->calcularEdad($fechaNacimiento);
			$this->request->data['Infantil']['edad'] = $edad;


			if ($this->Infantil->save($this->request->data)) {
				$this->Session->setFlash('Se ha guardado correctamente, por favor actulizar datos personales', 'default', array('class' => 'alert alert-success'));
				$familiaId = isset($this->data["Infantil"]["familia_id"]) ? $this->data["Infantil"]["familia_id"] : null;

				return $this->redirect(array(
					'controller' => 'familias',
					'action' => 'view',
					$this->data["Infantil"]["familia_id"],
					'?' => array(
						'familia_id' => $familiaId
					)
				));
			} else {
				$this->Session->setFlash('No se ha guardado, por favor revisar campos', 'default', array('class' => 'alert alert-danger'));
			}
		}

		$familias = $this->Infantil->Familia->find('list');
		$canalizaciones = $this->Infantil->Canalizacion->find('list');

		$this->set(compact('familias', 'canalizaciones'));
	}

	private function calcularEdad($fechaNacimiento)
	{
		$fechaActual = new DateTime();
		$fechaNacimiento = new DateTime($fechaNacimiento['year'] . '-' . $fechaNacimiento['month'] . '-' . $fechaNacimiento['day']);
		$diferencia = $fechaNacimiento->diff($fechaActual);

		$anosTotales = $diferencia->y;


		return number_format($anosTotales, 1);
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
		if (!$this->Infantil->exists($id)) {
			throw new NotFoundException(__('Invalid infantil'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Infantil->save($this->request->data)) {
				$this->Session->setFlash('Se ha guardado correctamente', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('controller' => 'familias', 'action' => 'view/' . $this->data["Infantil"]["familia_id"]));
			} else {
				$this->Session->setFlash('No se ha guardado, por favor revisar campos', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Infantil.' . $this->Infantil->primaryKey => $id));
			$this->request->data = $this->Infantil->find('first', $options);
		}
		$familias = $this->Infantil->Familia->find('list');
		$canalizacions = $this->Infantil->Canalizacion->find('list');
		$personas = $this->Infantil->Persona->find('list');
		$this->set(compact('familias', 'personas', 'canalizacions'));
	}

	public function canalizacion($id = null)
	{
		if (!$this->Infantil->exists($id)) {
			throw new NotFoundException(__('Invalid infantil'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Infantil->save($this->request->data)) {
				$this->Session->setFlash('Se ha guardado correctamente', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('controller' => 'familias', 'action' => 'view/' . $this->data["Infantil"]["familia_id"]));
			} else {
				$this->Session->setFlash('No se ha guardado, por favor revisar campos', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Infantil.' . $this->Infantil->primaryKey => $id));
			$this->request->data = $this->Infantil->find('first', $options);
		}
		$familias = $this->Infantil->Familia->find('list');
		$canalizacions = $this->Infantil->Canalizacion->find('list');
		$personas = $this->Infantil->Persona->find('list');
		$this->set(compact('familias', 'personas', 'canalizacions'));
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
		$this->Infantil->id = $id;

		if (!$this->Infantil->exists()) {
			throw new NotFoundException(__('Invalid infantil'));
		}

		// Obtener el familia_id antes de eliminar
		$familiaId = $this->Infantil->field('familia_id');

		$this->request->allowMethod('post', 'delete');

		if ($this->Infantil->delete()) {
			$this->Session->setFlash('El registro se borro exitosamente', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('El registro no se pudo borrar', 'default', array('class' => 'alert alert-danger'));
		}

		// Redirigir al controller "familias" y a la acción "view" con el familia_id
		return $this->redirect(array('controller' => 'familias', 'action' => 'view', $familiaId));
	}
}
