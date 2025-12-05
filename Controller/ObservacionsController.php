<?php
App::uses('AppController', 'Controller');
/**
 * Observacions Controller
 *
 * @property Observacion $Observacion
 * @property PaginatorComponent $Paginator
 */
class ObservacionsController extends AppController
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
		$count = $this->Observacion->find('count');
		$this->Paginator->settings['limit'] = $count;

		$this->set(
			"observacions",
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
	 * 
	 * 
	 * 
	 */

	public function add()
	{
		if ($this->request->is(array('post'))) {
			if ($this->Observacion->save($this->request->data)) {
				if ($this->request->data['btn'] == 'Guardar y continuar') {
					//$session->setFlash("registro guardado");
					$this->Session->setFlash('Registro se creó con éxito, continuar con la creacion del plan de cuidado', 'flash_custom', array('class' => 'success', 'title' => 'El registro se ha completado correctamente'));
					$familiaId = isset($this->request->data["Observacion"]["familia_id"]) ? $this->request->data["Observacion"]["familia_id"] : null;

					// Redireccionar a la vista de la familia
					return $this->redirect(array(
						'controller' => 'familias',
						'action' => 'view',
						$familiaId, // Usa la variable directamente
						'?' => array(
							'familia_id' => $familiaId
						)
					));
				} else {
					$this->Session->setFlash('Registro se guardado con exito, continuar con informacion de la familia / hogar', 'flash_custom', array('class' => 'info', 'title' => 'Copia el ID de la vivienda: ' . $this->Sociambiental->id));
					//return $this->redirect(array('controller' => 'plsesiones', 'action' => 'nuebus'));                error
					return $this->redirect(array('controller' => 'Familias', 'action' => 'index'));
				}
			} else {
				$this->Session->setFlash('El registro no fue actualizado o esta pendiente un campo del formulario', 'flash_custom', array('class' => 'error', 'title' => 'Error al guardar el registro'));
			}
		}
	}

	public function add_plancuidado($id = null)
	{
		if (!$this->Observacion->exists($id)) {
			throw new NotFoundException(__('Invalid observacion'));
		}

		if ($this->request->is(array('post', 'put'))) {
			// Procesar otros campos específicos del formulario si es necesario
			if ($this->Observacion->save($this->request->data)) {
				$this->Session->setFlash('Se ha guardado correctamente', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('controller' => 'familias', 'action' => 'view', $this->request->data["Observacion"]["familia_id"]));
			} else {
				$this->Session->setFlash('No se ha guardado, por favor revisar campos', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array(
				'conditions' => array('Observacion.' . $this->Observacion->primaryKey => $id),
				'fields' => array(
					'Observacion.resultadoEcomapa',
					'Observacion.resultadoFamiliograma',
					'Observacion.fecha',
					'Observacion.menoresriegosalud',
					'Observacion.riesgovulnerabilidad',
					'Observacion.puntuacionfamilia',
					'Observacion.valoracionfamilia',
					'Observacion.observacion',
					'Observacion.objetivocortoplazo',
					'Observacion.objetivolargoplazo',
					'Observacion.entornoafectado',
					'Observacion.indicadorria',
					'Observacion.actividaddesarrollar',
					'Observacion.observacionesplancuidado',
					'Observacion.firmaplancuidado',
					'Observacion.disentimiento',
					'Observacion.date',
					'Responsable.nombres',
				),
				'Responsable' => array(
					'fields' => array('Responsable.id', 'Responsable.nombres')
				)
			);
			$this->request->data = $this->Observacion->find('first', $options);


			// Si el campo viene almacenado como CSV, convertirlo a array para que los checkboxes estén seleccionados
			if (!empty($this->request->data['Observacion']['entornoafectado']) && is_string($this->request->data['Observacion']['entornoafectado'])) {
				$this->request->data['Observacion']['entornoafectado'] = explode(',', $this->request->data['Observacion']['entornoafectado']);
			}
		}

		$familias = $this->Observacion->Familia->find('list');
		$responsables = $this->Observacion->Responsable->find('list');
		$this->set(compact('familias', 'responsables'));
	}

	public function addanexo()
	{
		if ($this->request->is('post')) {
			$this->Observacion->create();
			if ($this->Observacion->save($this->request->data)) {
				$this->Session->setFlash('La observación se ha guardado correctamente', 'default', array('class' => 'alert alert-success'));
				$familiaId = isset($this->data["Observacion"]["familia_id"]) ? $this->data["Observacion"]["familia_id"] : null;

				return $this->redirect(array(
					'controller' => 'familias',
					'action' => 'view',
					$this->data["Observacion"]["familia_id"],
					'?' => array(
						'familia_id' => $familiaId
					)
				));
			} else {
				$this->Session->setFlash('No se ha guardado, por favor revisar campos', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$familias = $this->Observacion->Familia->find('list');
		$responsables = $this->Observacion->Responsable->find('list');
		$this->set(compact('familias', 'responsables'));
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
		if (!$this->Observacion->exists($id)) {
			throw new NotFoundException(__('Invalid observacion'));
		}

		if ($this->request->is(array('post', 'put'))) {
			if ($this->Observacion->save($this->request->data)) {
				$this->Session->setFlash('Se ha guardado correctamente', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('controller' => 'familias', 'action' => 'view/' . $this->data["Observacion"]["familia_id"]));
			} else {
				$this->Session->setFlash('No se ha guardado, por favor revisar campos', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Observacion.' . $this->Observacion->primaryKey => $id));
			$this->request->data = $this->Observacion->find('first', $options);
		}

		$familias = $this->Observacion->Familia->find('list');
		$responsables = $this->Observacion->Responsable->find('list');
		$this->set(compact('familias', 'responsables'));
	}

	public function editanexo($id = null)
	{
		if (!$this->Observacion->exists($id)) {
			throw new NotFoundException(__('Invalid observacion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Observacion->save($this->request->data)) {
				$this->Session->setFlash('La observación se ha guardado correctamente', 'default', array('class' => 'alert alert-success'));
				$familiaId = isset($this->data["Observacion"]["familia_id"]) ? $this->data["Observacion"]["familia_id"] : null;

				return $this->redirect(array(
					'controller' => 'familias',
					'action' => 'view',
					$this->data["Observacion"]["familia_id"],
					'?' => array(
						'familia_id' => $familiaId
					)
				));
			} else {
				$this->Session->setFlash('No se ha guardado, por favor revisar campos', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$familias = $this->Observacion->Familia->find('list');
		$responsables = $this->Observacion->Responsable->find('list');
		$this->set(compact('familias', 'responsables'));
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
		$this->Observacion->id = $id;
		if (!$this->Observacion->exists()) {
			throw new NotFoundException(__('Invalid observacion'));
		}

		// Obtener el familia_id antes de eliminar
		$familiaId = $this->Observacion->field('familia_id');



		$this->request->allowMethod('post', 'delete');
		if ($this->Observacion->delete()) {


			$this->Session->setFlash('El registro se borro exitosamente', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('El registro no se pudo borrar', 'default', array('class' => 'alert alert-danger'));
		}


		// Redirigir al controller "familias" y a la acción "view" con el familia_id
		return $this->redirect(array('controller' => 'familias', 'action' => 'view', $familiaId));
	}
}
