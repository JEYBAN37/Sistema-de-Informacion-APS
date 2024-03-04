<?php
App::uses('Primerainfancia', 'Model');

/**
 * Primerainfancia Test Case
 *
 */
class PrimerainfanciaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.primerainfancia',
		'app.familia',
		'app.socioambiental',
		'app.antecedenteenfermedad',
		'app.riesgopsicosocial',
		'app.programasocial',
		'app.discapacidad',
		'app.victima',
		'app.persona'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Primerainfancia = ClassRegistry::init('Primerainfancia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Primerainfancia);

		parent::tearDown();
	}

}
