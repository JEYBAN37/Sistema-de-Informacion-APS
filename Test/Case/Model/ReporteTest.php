<?php
App::uses('Reporte', 'Model');

/**
 * Reporte Test Case
 *
 */
class ReporteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.reporte',
		'app.familia',
		'app.sociambiental',
		'app.responsable',
		'app.ubicacion',
		'app.sociambientalscompletum',
		'app.adolescencia',
		'app.persona',
		'app.primerainfancia',
		'app.canalizacion',
		'app.infantil',
		'app.juventudadulto',
		'app.gestante',
		'app.observacion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Reporte = ClassRegistry::init('Reporte');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Reporte);

		parent::tearDown();
	}

}
