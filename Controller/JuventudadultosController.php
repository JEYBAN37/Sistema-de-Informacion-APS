<?php
App::uses('AppController', 'Controller');
/**
 * Juventudadultos Controller
 *
 * @property Juventudadulto $Juventudadulto
 * @property PaginatorComponent $Paginator
 * @property Intervecion $Intervecion
 */
class JuventudadultosController extends AppController
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
		$this->Juventudadulto->recursive = 0;

		$count = $this->Juventudadulto->find('count');
		$this->Paginator->settings['limit'] = $count;

		$this->set('juventudadultos', $this->paginate());
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
		if (!$this->Juventudadulto->exists($id)) {
			throw new NotFoundException(__('Invalid juventudadulto'));
		}
		$options = array('conditions' => array('Juventudadulto.' . $this->Juventudadulto->primaryKey => $id));
		$this->set('juventudadulto', $this->Juventudadulto->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		$this->loadModel('Persona');

		if ($this->request->is('post')) {
			$this->Juventudadulto->create();
			$id_familia = $this->request->data['Juventudadulto']['familia_id'];
			if ($this->Juventudadulto->save($this->request->data)) {

				$this->loadHistorial(array(
					'Intervecion' => array(
						'juventudadultos_id' => $this->Juventudadulto->id,
						'fecha' => date('Y-m-d'),
						'historial' => json_encode($this->request->data['Juventudadulto']),
						'responsable_id' => $this->userCurrent(),
					)
				));

				$this->Persona->create();
				if($this->Persona->save(array(
					'Persona' => array(
						'juventudadulto_id' => $this->Juventudadulto->id,
						'familia_id' => $id_familia,
						'primernombre' => $this->request->data['Juventudadulto']['primernombre'],
						'segundonombre' => $this->request->data['Juventudadulto']['segundonombre'],
						'primerapellido' => $this->request->data['Juventudadulto']['primerapellido'],
						'segundoapellido' => $this->request->data['Juventudadulto']['segundoapellido'],
						'tipodocumento' => $this->request->data['Juventudadulto']['tipodocumento'],
						'numerodoc' => $this->request->data['Juventudadulto']['numerodoc'],
						'fechanac' => $this->request->data['Juventudadulto']['fechanac'],
						'regimen' => $this->request->data['Juventudadulto']['regimen'],
						'discapacidad' => $this->request->data['Juventudadulto']['discapacidad'],
						'condicioncronica' => $this->request->data['Juventudadulto']['condicioncronica'],
						'canalizacionuno' => $this->request->data['Juventudadulto']['canalizacionuno'],
						'sociambiental_id'  => $this->request->data['Juventudadulto']['sociambiental_id'],
						'sexo' => $this->request->data['Juventudadulto']['sexo'],
						'familia_id' => $id_familia,
						'responsable_id' => $this->userCurrent(),
					)
				))){
					if (isset($this->request->data['btn']) && $this->request->data['btn'] == 'Guardar y agregar integrante') {
					$this->Session->setFlash('Registro de familia se guradado con exito, continuar con informacion del siguiente integrante', 'flash_custom', array('class' => 'success', 'title' => 'El registro se ha completado correctamente'));
					// Asegurar que no quede data previa en el siguiente formulario
					$this->request->data = array();
					return $this->redirect(array(
						'controller' => 'Juventudadultos',
						'action' => 'add',
						'?' => array('juventudadultos' => $id_familia)
					));
				}

				if (isset($this->request->data['btn']) && $this->request->data['btn'] == 'Guardar') {
					$this->Session->setFlash('Registro de familia se guradado con exito, continuar con informacion del siguiente integrante', 'flash_custom', array('class' => 'success', 'title' => 'El registro se ha completado correctamente'));

					return $this->redirect(array(
						'controller' => 'Familias',
						'action' => 'view/' . $id_familia,
						'?' => array('familia' => $id_familia)
					));
				}
				} else {
					// Manejo de error si el registro de Persona no se guarda
					$this->Session->setFlash('El registro de Persona no fue guardado correctamente pórque ya existe.', 'flash_custom', array('class' => 'error', 'title' => 'Error al guardar el registro'));
				}

			} else {
				$this->Session->setFlash('El registro no fue guardado o esta pendiente un campo del formulario', 'flash_custom', array('class' => 'error', 'title' => 'Error al guardar el registro'));
			}
		}

		$canalizaciones = $this->Juventudadulto->Canalizacion->find('list');
		$this->set(compact('canalizaciones'));
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
		if (!$this->Juventudadulto->exists($id)) {
			$this->Session->setFlash('La persona no existe', 'flash_custom', array('class' => 'error', 'title' => 'Error al cargar el registro'));
			return $this->redirect(array('controller' => 'Familias', 'action' => 'index'));
		}

		if ($this->request->is(array('post', 'put'))) {
			if ($this->Juventudadulto->save($this->request->data)) {

				$this->loadHistorial(array(
					'Intervecion' => array(
						'juventudadultos_id' => $this->Juventudadulto->id,
						'fecha' => date('Y-m-d'),
						'historial' => json_encode($this->request->data['Juventudadulto']),
						'responsable_id' => $this->userCurrent(),

					)
				));

				if (isset($this->request->data['btn']) == 'Guardar') {
					$this->Session->setFlash('Registro de Persona se actualizo con exito', 'flash_custom', array('class' => 'success', 'title' => 'El registro se ha actualizado correctamente'));
					return $this->redirect(array('controller' => 'familias', 'action' => 'view/', $this->data["Juventudadulto"]["familia_id"]));
				}
			} else {
				$this->Session->setFlash('El registro no fue guardado o esta pendiente un campo del formulario', 'flash_custom', array('class' => 'error', 'title' => 'Error al guardar el registro'));
			}
		} else {
			$options = array('conditions' => array('Juventudadulto.' . $this->Juventudadulto->primaryKey => $id));
			$this->request->data = $this->Juventudadulto->find('first', $options);
			$this->request->data = $this->Juventudadulto->tranformData($this->request->data);
			// Asegurar que el campo id esté presente para el formulario
			if (!empty($this->request->data['Juventudadulto'][$this->Juventudadulto->primaryKey])) {
				$this->request->data['Juventudadulto']['id'] = $this->request->data['Juventudadulto'][$this->Juventudadulto->primaryKey];
			}
		}

		$canalizaciones = $this->Juventudadulto->Canalizacion->find('list');
		$this->set(compact('canalizaciones'));
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
		$this->Juventudadulto->id = $id;
		if (!$this->Juventudadulto->exists()) {
			throw new NotFoundException(__('Invalid juventudadulto'));
		}
		// Obtener el familia_id antes de eliminar
		$familiaId = $this->Juventudadulto->field('familia_id');
		$this->request->allowMethod('post', 'delete');
		if ($this->Juventudadulto->delete()) {
			$this->Session->setFlash('El registro se borro exitosamente', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('El registro se borro exitosamente', 'default', array('class' => 'alert alert-danger'));
		}
		// Redirigir al controller "familias" y a la acci�n "view" con el familia_id
		return $this->redirect(array('controller' => 'familias', 'action' => 'view', $familiaId));
	}
}



