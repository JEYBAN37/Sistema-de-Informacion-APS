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

		$count = $this->Primerainfancia->find('count');
		$this->Paginator->settings['limit'] = $count;

		$this->set(
			"primerainfancias",
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

			// Obtener la fecha de nacimiento del formulario
			$fechaNacimiento = $this->request->data['Primerainfancia']['fechanac'];



			// Calcular la edad
			$edad = $this->calcularEdad($fechaNacimiento);
			// Verificar si la edad es igual a 1 y realizar la división


			// Asignar la edad al campo correspondiente en el formulario
			$this->request->data['Primerainfancia']['edad'] = $edad;

			if ($this->Primerainfancia->save($this->request->data)) {
				$this->Session->setFlash('Registro de Primerainfancia guardado, por favor actualice datos de la Primerainfancia', 'default', array('class' => 'alert alert-success'));

				// Verificar si el valor es nulo o no
				$familiaId = isset($this->data["Primerainfancia"]["familia_id"]) ? $this->data["Primerainfancia"]["familia_id"] : null;

				return $this->redirect(array(
					'controller' => 'familias',
					'action' => 'view',
					$this->data["Primerainfancia"]["familia_id"],
					'?' => array(
						'familia_id' => $familiaId
					)
				));
			} else {
				$this->Session->setFlash('No se ha guardado, por favor revisar campos', 'default', array('class' => 'alert alert-danger'));
			}
		}

		$familias = $this->Primerainfancia->Familia->find('list');
		$canalizaciones = $this->Primerainfancia->Canalizacion->find('list');
		$this->set(compact('familias', 'canalizaciones'));
	}


	private function calcularEdad($fechaNacimiento)
	{
		$fechaActual = new DateTime();
		$fechaNacimiento = new DateTime($fechaNacimiento['year'] . '-' . $fechaNacimiento['month'] . '-' . $fechaNacimiento['day']);
		$diferencia = $fechaNacimiento->diff($fechaActual);

		$mesesTotales = $diferencia->y * 12 + $diferencia->m + $diferencia->d / 30;


		return number_format($mesesTotales, 1);
	}

	public function add2_5()
	{
		if ($this->request->is('post')) {
			$this->Primerainfancia->create();

			// Obtener la fecha de nacimiento del formulario
			$fechaNacimiento = $this->request->data['Primerainfancia']['fechanac'];



			// Calcular la edad
			$edad = $this->calcularEdad5($fechaNacimiento);
			// Verificar si la edad es igual a 1 y realizar la división


			// Asignar la edad al campo correspondiente en el formulario
			$this->request->data['Primerainfancia']['edad'] = $edad;

			if ($this->Primerainfancia->save($this->request->data)) {
				$this->Session->setFlash('Registro de Primerainfancia guardado, por favor actualice datos de la Primerainfancia', 'default', array('class' => 'alert alert-success'));

				// Verificar si el valor es nulo o no
				$familiaId = isset($this->data["Primerainfancia"]["familia_id"]) ? $this->data["Primerainfancia"]["familia_id"] : null;

				return $this->redirect(array(
					'controller' => 'familias',
					'action' => 'view',
					$this->data["Primerainfancia"]["familia_id"],
					'?' => array(
						'familia_id' => $familiaId
					)
				));
			} else {
				$this->Session->setFlash('No se ha guardado, por favor revisar campos', 'default', array('class' => 'alert alert-danger'));
			}
		}

		$familias = $this->Primerainfancia->Familia->find('list');
		$canalizaciones = $this->Primerainfancia->Canalizacion->find('list');
		$this->set(compact('familias', 'canalizaciones'));
	}

	private function calcularEdad5($fechaNacimiento)
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
		if (!$this->Primerainfancia->exists($id)) {
			throw new NotFoundException(__('Invalid Primerainfancia'));
		}
		if ($this->request->is(array('post', 'put'))) {

			// Obtener la fecha de nacimiento del formulario
			$fechaNacimiento = $this->request->data['Primerainfancia']['fechanac'];



			// Calcular la edad
			$edad = $this->calcularEdadTodos5($fechaNacimiento);
			// Verificar si la edad es igual a 1 y realizar la división


			// Asignar la edad al campo correspondiente en el formulario
			$this->request->data['Primerainfancia']['edad'] = $edad;
			if ($this->Primerainfancia->save($this->request->data)) {
				$this->Session->setFlash('Registro de Primerainfancia actualizado', 'default', array('class' => 'alert alert-success'));
				//return $this->redirect(array('action' => 'index'));
				//return $this->redirect(array('controller' => 'Familias', 'action' => 'index'));

				return $this->redirect(array('controller' => 'familias', 'action' => 'view/' . $this->data["Primerainfancia"]["familia_id"]));

				//return $this->redirect(array('controller' => 'familias', 'action' => 'view/' . $this->data["familia"]["id"]));
			} else {
				$this->Session->setFlash('No se ha guardado, por favor revisar campos', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Primerainfancia.' . $this->Primerainfancia->primaryKey => $id));
			$this->request->data = $this->Primerainfancia->find('first', $options);
		}
		$familias = $this->Primerainfancia->Familia->find('list', array(
			'order' => array('Familia.id' => 'desc'),

		));

		$canalizaciones = $this->Primerainfancia->Canalizacion->find('list');
		$this->set(compact('familias', 'canalizaciones'));
	}
	private function calcularEdadTodos5($fechaNacimiento)
	{
		$fechaActual = new DateTime();
		$fechaNacimiento = new DateTime($fechaNacimiento['year'] . '-' . $fechaNacimiento['month'] . '-' . $fechaNacimiento['day']);
		$diferencia = $fechaNacimiento->diff($fechaActual);

		$anosTotales = $diferencia->y;


		return number_format($anosTotales, 1);
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

		// Obtener el familia_id antes de eliminar
		$familiaId = $this->Primerainfancia->field('familia_id');

		$this->request->allowMethod('post', 'delete');

		if ($this->Primerainfancia->delete()) {
			$this->Session->setFlash('El registro se borro exitosamente', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('El registro no se pudo borrar', 'default', array('class' => 'alert alert-danger'));
		}


		// Redirigir al controller "familias" y a la acción "view" con el familia_id
		return $this->redirect(array('controller' => 'familias', 'action' => 'view', $familiaId));
	}
}
