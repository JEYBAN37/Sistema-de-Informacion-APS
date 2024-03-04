<?php
App::uses('EventosViewTest', 'Model');

/**
 * EventosViewTest Test Case
 *
 */
class EventosViewTestTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.eventos_view_test',
		'app.responsable',
		'app.actividad',
		'app.ubicacion',
		'app.acta_view_test',
		'app.producto',
		'app.productos_actividad',
		'app.acta',
		'app.productosactividad',
		'app.referente',
		'app.actividades_view_test',
		'app.plsesion',
		'app.plsmomento',
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
		'app.institucion',
		'app.personas_actividad',
		'app.participantesevento',
		'app.infoevento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EventosViewTest = ClassRegistry::init('EventosViewTest');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EventosViewTest);

		parent::tearDown();
	}

}
