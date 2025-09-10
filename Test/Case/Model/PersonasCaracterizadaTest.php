<?php
App::uses('PersonasCaracterizada', 'Model');

/**
 * PersonasCaracterizada Test Case
 *
 */
class PersonasCaracterizadaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.personas_caracterizada',
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
		$this->PersonasCaracterizada = ClassRegistry::init('PersonasCaracterizada');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PersonasCaracterizada);

		parent::tearDown();
	}

}
