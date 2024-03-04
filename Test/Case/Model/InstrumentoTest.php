<?php
App::uses('Instrumento', 'Model');

/**
 * Instrumento Test Case
 *
 */
class InstrumentoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.instrumento',
		'app.dimension',
		'app.convocatoria',
		'app.responsable',
		'app.criterio',
		'app.compromiso',
		'app.conclusion',
		'app.subcriterio'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Instrumento = ClassRegistry::init('Instrumento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Instrumento);

		parent::tearDown();
	}

}
