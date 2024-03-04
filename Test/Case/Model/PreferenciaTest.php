<?php
App::uses('Preferencia', 'Model');

/**
 * Preferencia Test Case
 *
 */
class PreferenciaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.preferencia'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Preferencia = ClassRegistry::init('Preferencia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Preferencia);

		parent::tearDown();
	}

}
