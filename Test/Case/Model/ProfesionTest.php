<?php
App::uses('Profesion', 'Model');

/**
 * Profesion Test Case
 *
 */
class ProfesionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.profesion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Profesion = ClassRegistry::init('Profesion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Profesion);

		parent::tearDown();
	}

}
