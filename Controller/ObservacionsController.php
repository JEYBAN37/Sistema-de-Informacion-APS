<?php
App::uses('AppController', 'Controller');
/**
 * Observacions Controller
 *
 * @property Observacion $Observacion
 * @property Juventudadulto $Juventudadulto
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

				$this->loadHistorial(array(
					'Intervecion' => array(
						'observacion_id' => $this->Observacion->id,
						'fecha' => date('Y-m-d'),
						'historial' => json_encode($this->request->data['Observacion']),
						'responsable_id' => $this->userCurrent(),

					)
				));


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
		$this->loadModel('Juventudadulto');
		if (!$this->Observacion->exists($id)) {
			throw new NotFoundException(__('Invalid observacion'));
		}

		if ($this->request->is(array('post', 'put'))) {
			// Guardar copia de los datos originales antes de intentar guardar
			$datosOriginales = $this->request->data;
			
			// El Model's beforeSave se encarga de convertir los arrays a strings
			if ($this->Observacion->save($this->request->data)) {

				$this->loadHistorial(array(
					'Intervecion' => array(
						'observacion_id' => $this->Observacion->id,
						'fecha' => date('Y-m-d'),
						'historial' => json_encode($this->request->data['Observacion']),
						'responsable_id' => $this->userCurrent(),
					)
				));
				
				$this->Session->setFlash('Registro se guardó con éxito, continuar con la firma del Plan de Cuidado', 'flash_custom', array('class' => 'success', 'title' => 'El registro se ha completado correctamente'));					//return $this->redirect(array('action' => 'index'));
				return $this->redirect(array('controller' => 'familias', 'action' => 'view', $this->request->data["Observacion"]["familia_id"]));
			} else {
				// Si hay error, restaurar los datos originales (sin modificaciones de beforeSave)
				// para que se muestren en la vista tal como los envió el usuario
				$this->request->data = $datosOriginales;
				$this->Session->setFlash('No se ha guardado, por favor revisar campos', 'flash_custom', array('class' => 'error', 'title' => 'Error al guardar el registro'));
			}
		} else {
			// Si no hay datos POST (carga inicial), cargar del servidor
			$options = array(
				'conditions' => array('Observacion.' . $this->Observacion->primaryKey => $id),
				'fields' => array(
					'Observacion.responsable_id',
					'Observacion.familia_id',
					'Observacion.resultadoEcomapa',
					'Observacion.resultadoFamiliograma',
					'Observacion.date',
					'Observacion.id',
					'Observacion.menoresriegosalud',
					'Observacion.riesgovulnerabilidad',
					'Observacion.puntuacionfamilia',
					'Observacion.valoracionfamilia',
					'Observacion.fortalezas',
					'Observacion.objetivocortoplazo',
					'Observacion.objetivolargoplazo',
					'Observacion.entornoafectado',
					'Observacion.indicadorria',
					'Observacion.actividaddesarrollar',
					'Observacion.disentimiento',
					'Observacion.observacionesplancuidado',
					'Observacion.firmaplancuidado',
					'Observacion.responsables',
				)
			);
			$this->request->data = $this->Observacion->tranformData($this->Observacion->find('first', $options));
		}
		$personas = $this->Juventudadulto->find('all', array(
			'conditions' => array('Juventudadulto.familia_id' => $this->request->data['Observacion']['familia_id']),
			'fields' => array(
				'Juventudadulto.id',
				'CONCAT(Juventudadulto.primernombre, " ",
				 Juventudadulto.segundonombre, " ",
				  Juventudadulto.primerapellido, " ",
				   Juventudadulto.segundoapellido) AS nombre_completo',
			)
		));

		$opciones = [];

		foreach ($personas as $item) {
			$id = $item['Juventudadulto']['id'];
			$nombre = $item[0]['nombre_completo'];

			$opciones[$id] = $nombre;
		}

		if (empty($this->request->data('Observacion')['familia_id']) || empty($opciones)) {
			$this->Session->setFlash('No hay personas registradas en esta familia. Por favor, registre al menos una persona antes de continuar con el plan de cuidado.', 'flash_custom', array('class' => 'error', 'title' => 'Error'));
			return $this->redirect(array('controller' => 'Juventudadultos', 'action' => 'add', '?' => array('familia_id' => $this->request->data['Observacion']['familia_id'])));
		}
		$responsables = $this->Observacion->Responsable->find('list');
		$this->set(compact('responsables', 'opciones'));
	}


	public function addanexo($id = null)
	{
		if (!$this->Observacion->exists($id)) {
			$this->Session->setFlash(
				'La familia no existe',
				'flash_custom',
				array('class' => 'error', 'title' => 'Error al cargar el registro')
			);
			return $this->redirect(array('controller' => 'Familias', 'action' => 'index'));
		}

		if ($this->request->is(array('post', 'put'))) {

			// 👇 Si NO se sube archivo, eliminar campo para evitar errores
			if (empty($this->request->data['Observacion']['plancuidado']['name'])) {
				unset($this->request->data['Observacion']['plancuidado']);
			}

			// 👇 DEJAR A UploadBehavior HACER SU TRABAJO (NO mover archivo manualmente)
			if ($this->Observacion->save($this->request->data)) {

				$this->loadHistorial(array(
					'Intervecion' => array(
						'observacion_id' => $this->Observacion->id,
						'fecha' => date('Y-m-d'),
						'historial' => json_encode($this->request->data['Observacion']),
						'responsable_id' => $this->userCurrent(),
					)
				));


				$this->Session->setFlash(
					'Registro actualizado con éxito',
					'flash_custom',
					array('class' => 'success', 'title' => 'Éxito')
				);
				return $this->redirect(array(
					'controller' => 'familias',
					'action' => 'view/' . $this->data["Observacion"]["familia_id"]
				));
			} else {
				$this->Session->setFlash(
					'El registro no fue actualizado o falta un campo',
					'flash_custom',
					array('class' => 'error', 'title' => 'Error')
				);
			}
		}

		$options = array(
			'conditions' => array('Observacion.familia_id' => $id)
		);

		$this->request->data = $this->Observacion->tranformData(
			$this->Observacion->find('first', $options)
		);
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
			$this->Session->setFlash(
				'La familia no existe',
				'flash_custom',
				array('class' => 'error', 'title' => 'Error al cargar el registro')
			);
			return $this->redirect(array('controller' => 'Familias', 'action' => 'index'));
		}

		if ($this->request->is(array('post', 'put'))) {

			// 👇 Si NO se sube archivo, eliminar campo para evitar errores
			if (empty($this->request->data['Observacion']['familiograma']['name'])) {
				unset($this->request->data['Observacion']['familiograma']);
			}

			// 👇 DEJAR A UploadBehavior HACER SU TRABAJO (NO mover archivo manualmente)
			if ($this->Observacion->save($this->request->data)) {

				$this->loadHistorial(array(
					'Intervecion' => array(
						'observacion_id' => $this->Observacion->id,
						'fecha' => date('Y-m-d'),
						'historial' => json_encode($this->request->data['Observacion']),
						'responsable_id' => $this->userCurrent(),
					)
				));

				$this->Session->setFlash(
					'Registro actualizado con éxito',
					'flash_custom',
					array('class' => 'success', 'title' => 'Éxito')
				);
				return $this->redirect(array(
					'controller' => 'familias',
					'action' => 'view/' . $this->data["Observacion"]["familia_id"]
				));
			} else {
				$this->Session->setFlash(
					'El registro no fue actualizado o falta un campo',
					'flash_custom',
					array('class' => 'error', 'title' => 'Error')
				);
			}
		}

		$options = array(
			'conditions' => array('Observacion.' . $this->Observacion->primaryKey => $id)
		);

		$this->request->data = $this->Observacion->tranformData(
			$this->Observacion->find('first', $options)
		);

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


			$this->Session->setFlash('La Observación ha sido eliminada correctamente.', 'flash_custom', array('class' => 'success', 'title' => 'La operación se ha completado correctamente'));
		} else {
			$this->Session->setFlash('El registro no se pudo borrar', 'flash_custom', array('class' => 'error', 'title' => 'Error al borrar el registro'));
		}


		// Redirigir al controller "familias" y a la acción "view" con el familia_id
		return $this->redirect(array('controller' => 'familias', 'action' => 'view', $familiaId));
	}
}
