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
		$options = array(
			'conditions' => array('Juventudadulto.' . $this->Juventudadulto->primaryKey => $id),
			'fields' => array(
				'Juventudadulto.*',
				'Canalizacion.nombre',

			),

		);
		$juventudadulto = $this->Juventudadulto->find('first', $options);
		$this->set('juventudadulto', $juventudadulto);
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

				$personaExistente = $this->Persona->find('first', array(
					'conditions' => array('Persona.numerodoc' => $this->request->data['Juventudadulto']['numerodoc']),
					'fields' => array('Persona.id')
				));

				// 2. Mapeamos los datos del formulario al formato de Persona
				$persona = array(
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
						'canalizacion_id' => $this->request->data['Juventudadulto']['canalizacion_id'],
						'sociambiental_id'  => $this->request->data['Juventudadulto']['sociambiental_id'],
						'sexo' => $this->request->data['Juventudadulto']['sexo'],
						'responsable_id' => $this->userCurrent(),
					)
				);

				// 3. Lógica de Update o Create
				if ($personaExistente) {
					// Si existe, extraemos el ID exacto y lo ponemos en el array de datos
					$persona['Persona']['id'] = $personaExistente['Persona']['id'];
				} else {
					// Si no existe, preparamos el modelo para un registro nuevo
					$this->Persona->create();
				}
				if ($this->Persona->save($persona)) {
					if (isset($this->request->data['btn']) && $this->request->data['btn'] == 'Guardar y agregar integrante') {
						$this->Session->setFlash('Registro de familia se guradado con exito, continuar con informacion del siguiente integrante', 'flash_custom', array('class' => 'success', 'title' => 'El registro se ha completado correctamente'));
						// Asegurar que no quede data previa en el siguiente formulario
						$this->request->data = array();
						return $this->redirect(array(
							'controller' => 'Juventudadultos',
							'action' => 'add',
							'?' => array('familia' => $id_familia)
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

			if (!empty($this->request->data['Juventudadulto']['familia_id'])) {
				$familiaId = $this->request->data['Juventudadulto']['familia_id'];

				// Cargar el modelo Familia explícitamente si no está en $uses
				if (!isset($this->Familia)) {
					$this->loadModel('Familia');
				}

				$idFamiliaExistente = $this->Familia->find('first', array(
					'conditions' => array('Familia.id' => $familiaId),
					'fields' => array('Familia.id')
				)); 

				if (empty($idFamiliaExistente)) {
					$this->Session->setFlash(
						'La familia no existe',
						'flash_custom',
						array('class' => 'error', 'title' => 'Error al cargar el registro')
					);
					 return;
			 
				}
			}

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



	public function foundCedulaforRedirecEdit($cedula = null)
	{
		$this->Juventudadulto->recursive = 0;
		$options = array('conditions' => array('Juventudadulto.numerodoc' => $cedula));
		$juventudadulto = $this->Juventudadulto->find('first', $options);

		if (!empty($juventudadulto)) {
			$cedula = $juventudadulto['Juventudadulto']['id'];
			return $this->redirect(array('controller' => 'Juventudadultos', 'action' => 'edit', $cedula));
		} else {
			$this->Session->setFlash('No se encontró la persona con la cédula proporcionada.', 'flash_custom', array('class' => 'error', 'title' => 'Error al buscar la persona'));
			return $this->redirect(array('controller' => 'Familias', 'action' => 'index'));
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
		$this->Juventudadulto->id = $id;
		if (!$this->Juventudadulto->exists()) {
			throw new NotFoundException(__('Invalid juventudadulto'));
		}
		// Obtener el familia_id antes de eliminar
		$familiaId = $this->Juventudadulto->field('familia_id');
		$this->request->allowMethod('post', 'delete');
		if ($this->Juventudadulto->delete()) {
			$this->Session->setFlash('La persona ha sido eliminada correctamente.', 'flash_custom', array('class' => 'success', 'title' => 'La operación se ha completado correctamente'));
		} else {
			$this->Session->setFlash('El registro no se pudo borrar', 'flash_custom', array('class' => 'error', 'title' => 'Error al borrar el registro'));
		}
		// Redirigir al controller "familias" y a la acci�n "view" con el familia_id
		return $this->redirect(array('controller' => 'familias', 'action' => 'view', $familiaId));
	}
}
