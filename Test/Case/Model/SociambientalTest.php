<?php
App::uses('Sociambiental', 'Model');

/**
 * Sociambiental Test Case
 *
 */
class SociambientalTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sociambiental',
		'app.responsable',
		'app.dimension',
		'app.convocatoria',
		'app.instrumento',
		'app.criterio',
		'app.compromiso',
		'app.conclusion',
		'app.subcriterio',
		'app.verificacion',
		'app.ubicacion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Sociambiental = ClassRegistry::init('Sociambiental');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sociambiental);

		parent::tearDown();
	}

}
