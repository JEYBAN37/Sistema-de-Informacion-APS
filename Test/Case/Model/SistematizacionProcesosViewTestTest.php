<?php
App::uses('SistematizacionProcesosViewTest', 'Model');

/**
 * SistematizacionProcesosViewTest Test Case
 *
 */
class SistematizacionProcesosViewTestTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sistematizacion_procesos_view_test',
		'app.sesion',
		'app.producto',
		'app.actividad',
		'app.ubicacion',
		'app.acta_view_test',
		'app.acta',
		'app.responsable',
		'app.productosactividad',
		'app.referente',
		'app.canalizacion',
		'app.aseguradora',
		'app.persona',
		'app.estudio',
		'app.poblacion',
		'app.organizacion',
		'app.proyecto',
		'app.entidad',
		'app.smsevento',
		'app.fuenteevento',
		'app.dimension',
		'app.evento',
		'app.ubicaciones',
		'app.sociedad',
		'app.sector',
		'app.personas_actividad',
		'app.institucion',
		'app.participantesacta',
		'app.participantesevento',
		'app.infoevento',
		'app.participantesproceso',
		'app.procesoregistro',
		'app.proactividad',
		'app.plsesion',
		'app.plsmomento',
		'app.participantesprocesos',
		'app.cantidad_personas_actividad_view_test',
		'app.cantidad_personas_pic_view_test',
		'app.productos_actividad',
		'app.actividades_view_test',
		'app.planseseion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SistematizacionProcesosViewTest = ClassRegistry::init('SistematizacionProcesosViewTest');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SistematizacionProcesosViewTest);

		parent::tearDown();
	}

}
