<?php
App::uses('ActaViewTest', 'Model');

/**
 * ActaViewTest Test Case
 *
 */
class ActaViewTestTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.acta_view_test',
		'app.ubicacion',
		'app.acta',
		'app.producto',
		'app.actividad',
		'app.responsable',
		'app.productosactividad',
		'app.referente',
		'app.poblacion',
		'app.organizacion',
		'app.persona',
		'app.estudio',
		'app.aseguradora',
		'app.smsevento',
		'app.fuenteevento',
		'app.dimension',
		'app.evento',
		'app.ubicaciones',
		'app.entidad',
		'app.proyecto',
		'app.sociedad',
		'app.sector',
		'app.personas_actividad',
		'app.institucion',
		'app.canalizacion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ActaViewTest = ClassRegistry::init('ActaViewTest');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ActaViewTest);

		parent::tearDown();
	}

}
