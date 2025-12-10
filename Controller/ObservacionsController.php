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
			debug($this->request->data);
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

		if ($this->request->is(array('post', 'put'))) {			// Procesar otros campos específicos del formulario si es necesario
			if ($this->Observacion->save($this->request->data)) {
				$this->Session->setFlash('Registro se guardó con éxito, continuar con información de la familia / hogar', 'flash_custom', array('class' => 'success', 'title' => 'El registro se ha completado correctamente'));					//return $this->redirect(array('action' => 'index'));
				return $this->redirect(array('controller' => 'familias', 'action' => 'view', $this->request->data["Observacion"]["familia_id"]));
			} else {
				$this->Session->setFlash('No se ha guardado, por favor revisar campos', 'flash_custom', array('class' => 'error', 'title' => 'Error al guardar el registro'));
			}
		}
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
				'Observacion.observacionesplancuidado',
				'Observacion.firmaplancuidado',
				'Observacion.responsables',
			)
		);
		$this->request->data = $this->Observacion->tranformData($this->Observacion->find('first', $options));

		$responsables = $this->Observacion->Responsable->find('list');
		$this->set(compact('responsables'));
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


			$this->Session->setFlash('El registro se borro exitosamente', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('El registro no se pudo borrar', 'default', array('class' => 'alert alert-danger'));
		}


		// Redirigir al controller "familias" y a la acción "view" con el familia_id
		return $this->redirect(array('controller' => 'familias', 'action' => 'view', $familiaId));
	}
}
