<?php
App::uses('Familia', 'Model');

/**
 * Familia Test Case
 *
 */
class FamiliaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.familia',
		'app.socioambiental',
		'app.antecedenteenfermedad',
		'app.riesgopsicosocial',
		'app.programasocial',
		'app.discapacidad',
		'app.victima',
		'app.primerainfancia'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Familia = ClassRegistry::init('Familia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Familia);

		parent::tearDown();
	}

}
