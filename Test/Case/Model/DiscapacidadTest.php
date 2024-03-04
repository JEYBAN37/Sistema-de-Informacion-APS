<?php
App::uses('Discapacidad', 'Model');

/**
 * Discapacidad Test Case
 *
 */
class DiscapacidadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.discapacidad'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Discapacidad = ClassRegistry::init('Discapacidad');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Discapacidad);

		parent::tearDown();
	}

}
