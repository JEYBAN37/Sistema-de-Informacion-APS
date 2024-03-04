<?php
App::uses('Subcriterio', 'Model');

/**
 * Subcriterio Test Case
 *
 */
class SubcriterioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subcriterio',
		'app.criterio',
		'app.instrumento',
		'app.dimension',
		'app.convocatoria',
		'app.responsable',
		'app.compromiso',
		'app.conclusion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Subcriterio = ClassRegistry::init('Subcriterio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Subcriterio);

		parent::tearDown();
	}

}
