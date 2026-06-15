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


	public function beforeFilter()
	{
		parent::beforeFilter();
		// Permitir acceso a métodos JSON sin autenticación
		$this->Auth->allow('plancuidadoIndex');
	}
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

	public function plancuidado()
	{
		$ubicaciones = $this->getUbicacionesSelect();
		$responsables = $this->getResponsablesSelectCompletos();
		$estados = [
			"Con G" => "Con Gestion del riesgo salud",
			"Con Gestion del riesgo salud" => "Con Gestion del riesgo salud",
			"Prior"	=> "Prioridad media",
			"Prioridad alta" => "Prioridad alta",
			"Prioridad baja" => "Prioridad baja",
			"Prioridad media" => "Prioridad media",
			"Riesgo Bajo" => "Riesgo Bajo",
			"Riesgo Medio" => "Riesgo Medio",
			"Riesgo Alto" => "Riesgo Alto",
		];

		$this->set(compact('ubicaciones', 'responsables', 'estados'));
	}

	public function plancuidadoIndex()
	{
		$this->loadModel('Observacion');
		$this->loadModel('Familia');
		$this->loadModel('Responsable');

		// Configurar para respuesta JSON
		$this->autoRender = false;
		$this->layout = false;
		$this->response->type('json');

		$columns = array('Familia.id');
		$fecha = isset($_GET['fecha']) ? trim($_GET['fecha']) : '';
		$start = isset($_GET['start']) ? intval($_GET['start']) : 0;
		$length = isset($_GET['length']) ? intval($_GET['length']) : 10;
		$search = isset($_GET['search']['value']) ? $_GET['search']['value'] : '';
		$microterritorio = isset($_GET['microterritorio']) ? $_GET['microterritorio'] : '';
		$responsable = isset($_GET['responsable']) ? $_GET['responsable'] : '';
		$estado = isset($_GET['estado']) ? $_GET['estado'] : '';
		$order = isset($_GET['order']) ? $_GET['order'] : array();
		$columns = isset($_GET['columns']) ? $_GET['columns'] : array();
		$search = trim($search);

		$orderBy = array();
		if (!empty($order)) {
			foreach ($order as $o) {
				$colIndex = intval($o['column']);
				$colName = $columns[$colIndex]['data'];
				$dir = strtoupper($o['dir']) === 'DESC' ? 'DESC' : 'ASC';

				switch ($colName) {
					case 'id':
						$orderBy['Observacion.id'] = $dir;
						break;
					case 'fecha':
						$orderBy['Observacion.date'] = $dir;
						break;
					case 'estado':
						$orderBy['Observacion.valoracionfamilia'] = $dir;
						break;
					case 'microterritorio':
						$orderBy['Ubicacion.microterritorio'] = $dir;
						break;
					default:
						$orderBy['Observacion.date'] = 'DESC';
				}
			}
		} else {
			$orderBy = array('Observacion.date' => 'DESC');
		}

		$conditions = array();

		if (!empty($microterritorio)) {
			$conditions['Ubicacion.id'] = intval($microterritorio);
		}

		if (!empty($responsable)) {
			$conditions['Responsable.id'] = intval($responsable);
		}

		if (!empty($estado)) {
			$conditions['Observacion.valoracionfamilia'] = $estado;
		}

		if (!empty($search)) {
			$conditions['OR'] = array(
				'Familia.id LIKE' => "%$search%",
				'Observacion.date LIKE' => "%$search%",
				'Observacion.id LIKE' => "%$search%",
				'Familia.celular LIKE' => "%$search%",
			);
		} elseif (!empty($microterritorio) || !empty($fecha)) {
			if (!empty($fecha)) {
				$conditions['Observacion.date'] = $fecha;
			}
		} else {
			$conditions['Observacion.date >='] = date('Y-m-d', strtotime('-30 days'));
		}

		$joins = array(
			array(
				'table' => 'familias',
				'alias' => 'Familia',
				'type' => 'INNER',
				'conditions' => array('Observacion.familia_id = Familia.id')
			),
			array(
				'table' => 'sociambientals',
				'alias' => 'Sociambiental',
				'type' => 'LEFT',
				'conditions' => array('Familia.sociambiental_id = Sociambiental.id')
			),
			array(
				'table' => 'ubicaciones',
				'alias' => 'Ubicacion',
				'type' => 'LEFT',
				'conditions' => array('Sociambiental.ubicacion_id = Ubicacion.id')
			),
			array(
				'table' => 'responsables',
				'alias' => 'Responsable',
				'type' => 'LEFT',
				'conditions' => array('FIND_IN_SET(Responsable.id, Observacion.responsables) > 0')
			),
		);

		$total = $this->Observacion->find('count', array(
			'recursive' => -1
		));

		$filtered = $this->Observacion->find('count', array(
			'conditions' => $conditions,
			'joins' => $joins,
			'distinct' => 'Observacion.id',
			'recursive' => -1,
		));

		$group = array(
			'Familia.id',
			'Observacion.id',
			'Observacion.valoracionfamilia',
			'Observacion.date',
			'Observacion.dirplancuidado',
			'Observacion.dirfamiliograma',
			'Ubicacion.microterritorio',
			'Responsable.nombres',
			'Sociambiental.apellidosfamilia',
		);

		$data = $this->Observacion->find('all', array(
			'conditions' => $conditions,
			'fields' => array(
				'Familia.id',
				'Observacion.id',
				'Observacion.valoracionfamilia',
				'Observacion.date',
				'Observacion.dirplancuidado',
				'Observacion.dirfamiliograma',
				'Observacion.familiograma',
				'Ubicacion.microterritorio',
				'Observacion.responsables',
				'Responsable.nombres',
				'Sociambiental.apellidosfamilia',
				'Observacion.base_anterior',
			),
			'joins' => $joins,
			'group' => $group,
			'limit' => $length,
			'offset' => $start,
			'order' => $orderBy,
			'recursive' => -1,
		));

		$draw = isset($_GET['draw']) ? intval($_GET['draw']) : 0;

		$result = array(
			'draw' => $draw,
			'recordsTotal' => $total,
			'recordsFiltered' => $filtered,
			'data' => array()
		);


		$result['data'] = array();
		foreach ($data as $row) {
			$result['data'][] = array(
				'id' => $row['Familia']['id'],
				'id_familia' => $row['Familia']['id'],
				'id_observacion' => $row['Observacion']['id'],
				'fecha' => $row['Observacion']['date'],
				'estado' => $row['Observacion']['valoracionfamilia'],
				'microterritorio' => $row['Ubicacion']['microterritorio'],
				'responsable' => $row['Responsable']['nombres'],
				'plancuidado' => $row['Observacion']['dirplancuidado'],
				'dirfamiliograma' => $this->sendViewFamiliograma(
					isset($row['Observacion']['dirfamiliograma']) ? $row['Observacion']['dirfamiliograma'] : null,
					isset($row['Observacion']['familiograma']) ? $row['Observacion']['familiograma'] : null,
					isset($row['Observacion']['base_anterior']) ? $row['Observacion']['base_anterior'] : null,
					isset($row['Observacion']['date']) ? $row['Observacion']['date'] : null,
					isset($row['Observacion']['id']) ? $row['Observacion']['id'] : null
				),
				'familiograma' => $row['Observacion']['familiograma'],
			);
		}

		unset($data);
		echo json_encode($result);
		exit();
	}

	// Alias para probar vía URL directa: /observacions/plancuidadoIndex




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
		$this->set($this->_getCatalogosObservacion());
		if ($this->request->is(array('post'))) {

			$existe = $this->Observacion->hasAny(array(
				'Observacion.familia_id' => $this->request->data['Observacion']['familia_id'],
				'Observacion.date' => date('Y-m-d')
			));

			if ($existe) {
				$this->Session->setFlash('Ya existe una observación registrada hoy para esta familia.', 'flash_custom', array('class' => 'error'));
				return $this->redirect(array('action' => 'index'));
			}

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
		$this->set($this->_getCatalogosObservacion());
		$this->loadModel('Juventudadulto');

		if (!$this->Observacion->exists($id)) {
			throw new NotFoundException(__('Invalid observacion'));
		}

		if ($this->request->is(array('post', 'put'))) {
			// Guardar copia de los datos originales antes de intentar guardar
			$this->request->data['Observacion']['id'] = $id;
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
					'Observacion.objetivocortoplazoresultados',
					'Familia.cuidadorpermante'
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
				'Juventudadulto.fechanac',
				'Juventudadulto.gestacion',
				'Juventudadulto.canalizacionuno',

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
		$responsables = $this->getResponsablesSelect();
		$cuidador = $this->request->data['Familia']['cuidadorpermante'];
		$parametros = $this->getParametros($personas, $cuidador);
		$this->set(compact('responsables', 'opciones', 'parametros'));
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
			'conditions' => array('Observacion.id' => $id),
			'recursive' => -1
		);

		$this->request->data = $this->Observacion->tranformData(
			$this->Observacion->find('first', $options)
		);

		$this->set('link', $this->sendViewPlanCuidado(
			isset($this->request->data['Observacion']['dirplancuidado']) ? $this->request->data['Observacion']['dirplancuidado'] : null,
			isset($this->request->data['Observacion']['plancuidado']) ? $this->request->data['Observacion']['plancuidado'] : null,
			isset($this->request->data['Observacion']['base_anterior']) ? $this->request->data['Observacion']['base_anterior'] : null,
			isset($this->request->data['Observacion']['date']) ? $this->request->data['Observacion']['date'] : null
		));
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

			$this->request->data['Observacion']['id'] = $id;

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
			'conditions' => array('Observacion.' . $this->Observacion->primaryKey => $id),
			'recursive' => -1
		);

		$observacion = $this->Observacion->find('first', $options);

		$this->request->data = $this->Observacion->tranformData($observacion);

		$this->set('linkFamiliograma', $this->sendViewFamiliograma(
			isset($observacion['Observacion']['dirfamiliograma']) ? $observacion['Observacion']['dirfamiliograma'] : null,
			isset($observacion['Observacion']['familiograma']) ? $observacion['Observacion']['familiograma'] : null,
			isset($observacion['Observacion']['base_anterior']) ? $observacion['Observacion']['base_anterior'] : null,
			isset($observacion['Observacion']['fecha']) ? $observacion['Observacion']['fecha'] : null,
			isset($observacion['Observacion']['id']) ? $observacion['Observacion']['id'] : null
		));

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

	private function _getCatalogosObservacion()
	{
		return [
			'riesgosalud' => [
				'0.1' => 'Ninguno',
				'5.1' => 'Menor con Riesgo desnutrición',
				'5.2' => 'Menor sin esquema de vacunación completo',
				'3.3' => 'Menor con Signos de peligro EDA o IRA',
				'2.1' => 'Menor sin valoraciones de PYM',
				'1' => 'Persona joven/adulto sin valoraciones de PYM',
				'5.4' => 'Gestante sin control',
				'4.5' => 'Embarazo de alto riesgo',
				'1.01' => 'Persona con enfermedad crónica con control',
				'5.6' => 'Persona con enfermedad crónica sin control',
				'4.1' => 'Persona Sintomatico respiratorio o de piel',
				'3' => 'Persona con enferemedad sin manejo',
				'3.4' => 'Persona con afectación de salud mental',
			],
			'riesgovulnerabilidad' => [
				'0.1' => 'Ninguna',
				'2.0' => 'Persona con discapacidad sin cuidador',
				'2.1' => 'Menor sin estudiar',
				'1.3' => 'Población Especial en riesgo',
				'2.4' => 'Persona sin afiliación a salud',
				'1.2' => 'Persona con consumo SPA',
				'2.01' => 'Sospecha de violencia intrafamiliar',
				'1.02' => 'Vivienda precaria',
				'1.03' => 'Cuidador con sobrecarga',
				'1.04' => 'Disfunción famliliar',
				'1.05' => 'Relaciones familiares tensas o estresantes'
			],
			'fortalezas' => [
				'Vivienda adecuada y segura' => 'Vivienda adecuada y segura',
				'Acceso a servicios básicos (agua,alcantarillado, luz, gas)' => 'Acceso a servicios básicos (agua, luz, gas)',
				'Buena salud física y mental de los miembros' => 'Buena salud física y mental de los miembros',
				'Relaciones familiares afectuosas y respetuosas' => 'Relaciones familiares afectuosas y respetuosas',
				'Apoyo emocional entre los miembros' => 'Apoyo emocional entre los miembros',
				'Participación activa en la comunidad' => 'Participación activa en la comunidad',
				'Estabilidad económica' => 'Estabilidad económica',
				'Acceso a educación y formación' => 'Acceso a educación y formación',
				'Habilidades de resolución de conflictos' => 'Habilidades de resolución de conflictos',
				'Red de apoyo social sólida' => 'Red de apoyo social sólida',
				'Prácticas saludables de alimentación y ejercicio' => 'Prácticas saludables de alimentación y ejercicio',
				'Entorno familiar seguro y libre de violencia' => 'Entorno familiar seguro y libre de violencia',
			],
			'entornoAfectado' => [
				'Hogar'   => 'Hogar',
				'Comunitario'   => 'Comunitario',
				'Educativo' => 'Educativo'
			],
			'actividadesDesarrollar' => [
				'manejo y seguimiento a riesgos en salud' => 'Manejo y seguimiento a riesgos en salud',
				'Atenciones,intervenciones individuales RIAS' => 'Atenciones/intervenciones individuales RIAS',
				'Derivación servicios salud especializados' => 'Derivación servicios salud especializados',
				'Apoyo Psicosocial' => 'Apoyo Psicosocial',
				'AcompañamientoAJUSTAR familiar' => 'Acompañamiento familiar',
				'Gestión recursos comunitarios' => 'Gestión recursos comunitarios',
				'Educación para la Salud' => 'Educación en Salud',
				'Información en Salud' => 'Información en Salud',
				'Intervenciones Colectivas' => 'Intervenciones Colectivas',
			]
		];
	}
}
