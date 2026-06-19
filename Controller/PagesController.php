<?php
App::uses('AppController', 'Controller');

class PagesController extends AppController {

	public $uses = array('Persona', 'Canalizacion', 'Familia');

	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			return $this->redirect('/');
		}

		// Si la página es 'canalizaciones', ejecutar la lógica del dashboard
		if (!empty($path[0]) && $path[0] === 'canalizaciones') {
			return $this->canalizaciones();
		}

		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));

		try {
			$this->render(implode('/', $path));
		} catch (MissingViewException $e) {
			if (count($path) > 1) {
				return $this->redirect('/');
			}
			throw $e;
		}
	}

	public function canalizaciones() {
		$this->loadModel('Canalizacion');

		// Obtener filtros
		$aseguradora = $this->request->query('aseguradora');
		$canalizacion_id = $this->request->query('canalizacion_id');

		// Construir condiciones base
		$conditions = array(
			'Persona.aceptaformulario' => 'Si acepta'
		);

		if (!empty($aseguradora)) {
			$conditions['Persona.aseguradora'] = $aseguradora;
		}

		if (!empty($canalizacion_id)) {
			$conditions['Persona.canalizacion_id'] = $canalizacion_id;
		}

		// ===== DATOS GENERALES =====
		// Total de canalizaciones
		$totalCanalizaciones = $this->Persona->find('count', array(
			'conditions' => $conditions
		));

		// Servicios de Salud
		$serviciosSalud = $this->Persona->find('count', array(
			'conditions' => array_merge($conditions, array(
				'OR' => array(
					'Persona.urgencia IS NOT NULL',
					'Persona.detecciontemprana IS NOT NULL',
					'Persona.rias IS NOT NULL'
				)
			))
		));

		// Oferta PIC
		$ofertaPic = $this->Persona->find('count', array(
			'conditions' => array_merge($conditions, array(
				"Persona.ofertapic IS NOT NULL AND Persona.ofertapic != '' AND Persona.ofertapic != '0.No |0'"
			))
		));

		// Caracterizaciones
		$caracterizaciones = $this->Persona->find('count', array(
			'conditions' => array_merge($conditions, array(
				'Persona.caracterizacionaps' => 'Caracterizar'
			))
		));

		// ===== DISTRIBUCIÓN POR ESTADO =====
		$estados = $this->Persona->find('all', array(
			'conditions' => $conditions,
			'fields' => array('Persona.estado', 'COUNT(*) as total'),
			'group' => 'Persona.estado'
		));

		$estadosData = array();
		foreach ($estados as $estado) {
			$estadoKey = isset($estado['Persona']['estado']) ? $estado['Persona']['estado'] : 'Sin estado';
			$estadosData[$estadoKey] = $estado[0]['total'];
		}

		// ===== DISTRIBUCIÓN POR ASEGURADORA =====
		$aseguradoras = $this->Persona->find('all', array(
			'conditions' => $conditions,
			'fields' => array('Persona.aseguradora', 'COUNT(*) as total'),
			'group' => 'Persona.aseguradora',
			'order' => 'total DESC',
			'limit' => 10
		));

		$aseguradorasData = array();
		foreach ($aseguradoras as $aseg) {
			$aseguradorasData[$aseg['Persona']['aseguradora']] = $aseg[0]['total'];
		}

		// ===== DISTRIBUCIÓN POR CANALIZACIÓN (IPS) =====
		$canalizacionesData = $this->Persona->find('all', array(
			'conditions' => $conditions,
			'fields' => array('Canalizacion.nombre', 'COUNT(*) as total'),
			'joins' => array(
				array(
					'table' => 'canalizaciones',
					'alias' => 'Canalizacion',
					'type' => 'LEFT',
					'conditions' => 'Persona.canalizacion_id = Canalizacion.id'
				)
			),
			'group' => 'Persona.canalizacion_id',
			'order' => 'total DESC',
			'limit' => 10,
			'recursive' => -1
		));

		$canalizacionesDataArray = array();
		foreach ($canalizacionesData as $can) {
			$nombre = isset($can['Canalizacion']['nombre']) ? $can['Canalizacion']['nombre'] : 'Sin canalización';
			$canalizacionesDataArray[$nombre] = $can[0]['total'];
		}

		// ===== DATOS PARA FILTROS =====
		$aseguradorasList = array(
			'Sanitas' => 'Sanitas',
			'Emssanar' => 'Emssanar',
			'Nueva EPS' => 'Nueva EPS',
			'Mallamas' => 'Mallamas',
			'Famisanar' => 'Famisanar',
			'Asmet Salud' => 'Asmet Salud',
			'Sanidad PONAL' => 'Sanidad PONAL',
			'PROINSALUD' => 'PROINSALUD',
			'Fondo UDENAR' => 'Fondo UDENAR',
			'Sin afiliación' => 'Sin afiliación'
		);

		$canalizacionesList = $this->Canalizacion->find('list', array(
			'fields' => array('Canalizacion.id', 'Canalizacion.nombre')
		));

		// ===== TOP BARRIOS =====
		$barrios = $this->Persona->find('all', array(
			'conditions' => $conditions,
			'fields' => array('Persona.barriovereda', 'COUNT(*) as total'),
			'group' => 'Persona.barriovereda',
			'order' => 'total DESC',
			'limit' => 5
		));

		$barriosData = array();
		foreach ($barrios as $barrio) {
			if (!empty($barrio['Persona']['barriovereda'])) {
				$barriosData[$barrio['Persona']['barriovereda']] = $barrio[0]['total'];
			}
		}

		// ===== SERVICIOS SOCIALES =====
		$servicioSocialCount = $this->Persona->find('count', array(
			'conditions' => array_merge($conditions, array(
				'Persona.serviciosocial IS NOT NULL',
				'Persona.serviciosocial !=' => ''
			))
		));

		// ===== CALCULAR PORCENTAJES =====
		$porcentajePic = $totalCanalizaciones > 0 ? round(($ofertaPic / $totalCanalizaciones) * 100, 1) : 0;
		$porcentajeSalud = $totalCanalizaciones > 0 ? round(($serviciosSalud / $totalCanalizaciones) * 100, 1) : 0;
		$porcentajeCaracterizacion = $totalCanalizaciones > 0 ? round(($caracterizaciones / $totalCanalizaciones) * 100, 1) : 0;
		$porcentajeSocial = $totalCanalizaciones > 0 ? round(($servicioSocialCount / $totalCanalizaciones) * 100, 1) : 0;

		// Pasar datos a la vista
		$this->set(compact(
			'totalCanalizaciones', 'serviciosSalud', 'ofertaPic', 'caracterizaciones',
			'estadosData', 'aseguradorasData', 'canalizacionesDataArray',
			'barriosData', 'servicioSocialCount',
			'porcentajePic', 'porcentajeSalud', 'porcentajeCaracterizacion', 'porcentajeSocial',
			'aseguradora', 'canalizacion_id',
			'aseguradorasList', 'canalizacionesList'
		));

		$this->render('canalizaciones');
	}
}
