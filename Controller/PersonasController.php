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
		$this->Persona->recursive = 0;
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
				$this->Session->setFlash(__('The persona has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The persona could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Persona.' . $this->Persona->primaryKey => $id));
			$this->request->data = $this->Persona->find('first', $options);
		}
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


	public function add()
	{

		$this->loadModel('Familia');
		$this->loadModel('Sociambiental');

		if ($this->request->is('post') || $this->request->is('put')) {

			if ($personaExistente) {

				// El usuario existe: Asignamos el ID para que CakePHP haga un UPDATE en lugar de INSERT
				$this->Persona->id = $personaExistente['Persona']['id'];
				$this->Session->setFlash(__('Usuario encontrado. Actualizando información existente.'), 'default', array('class' => 'success'));
			} else {
				// El usuario no existe: Preparamos para un nuevo registro
				$this->Persona->create();
				$this->Session->setFlash(__('Usuario no está en la tabla personas, por favor ingresar la información manualmente.'), 'default', array('class' => 'info'));
			}

			// 2. Guardar los datos (ya sea nuevo o actualización)
			if ($this->Persona->save($this->request->data)) {
				// llamar al modele juventud aduttosl


				$this->Session->setFlash(__('La información ha sido guardada correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo guardar la información. Por favor, intente de nuevo.'));
			}
		}
		// ESTO ES LO QUE TRAE LA INFORMACIÓN DE LA TABLA CANALIZACIONES
		// 'list' genera un arreglo tipo [id => nombre] automático para el select
		//$canalizaciones = $this->Persona->Canalizacion->find('list', array(
		// 'fields' => array('Canalizacion.id', 'Canalizacion.enlace'),
		// 'order' => 'Canalizacion.tipo ASC'
		//  ));
		//$this->set(compact('canalizaciones'));
	}

	// Acción AJAX o búsqueda rápida para cargar datos en los inputs sin recargar toda la página
	public function buscarPorDoc($doc = null)
	{
		
		$this->loadModel('Familia');
		$this->loadModel('Sociambiental');
		$this->autoRender = false;
		$persona = $this->Persona->find('first', array(
				'conditions' => array('Persona.numerodoc' => '1085273376'),
				'fields' => array(
					'Persona.id',
					'Persona.numerodoc',
					'Persona.familia_id',
					'Familia.id',
					'Familia.sociambiental_id',
					'Sociambiental.id',
					'Sociambiental.direccion',
					'Ubicacion.comuna',
					'Ubicacion.microterritorio',
					'Juventudadulto.numerodoc',
					'Juventudadulto.aseguradora',
					'Juventudadulto.telefono',
					'Juventudadulto.email',
					'Juventudadulto.canalizacion_id',
					'Juventudadulto.fechanac',
					'Juventudadulto.tipodocumento',
				),
				'recursive' => -1,
				'distinct' => 'Persona.id',
				'joins' => array(
					array(
						'table' => 'familias',
						'alias' => 'Familia',
						'type' => 'LEFT',
						'conditions' => array('Persona.familia_id = Familia.id'),
					),
					array(
						'table' => 'sociambientals',
						'alias' => 'Sociambiental',
						'type' => 'LEFT',
						'conditions' => array('Familia.sociambiental_id = Sociambiental.id')
					),
					array(
						'table' => 'juventudadultos',
						'alias' => 'Juventudadulto',
						'type' => 'LEFT',
						'conditions' => array('Persona.numerodoc = Juventudadulto.numerodoc')
					),
					array(
						'table' => 'ubicaciones',
						'alias' => 'Ubicacion',
						'type' => 'LEFT',
						'conditions' => array('Sociambiental.ubicacion_id = Ubicacion.id')
					)
				)
			));

		if ($persona) {
			return json_encode(array('success' => true, 'data' => $persona));
		} else {
			return json_encode(array('success' => false));
		}
	}
}
