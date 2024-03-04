<?php
App::uses('Victima', 'Model');

/**
 * Victima Test Case
 *
 */
class VictimaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.victima'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Victima = ClassRegistry::init('Victima');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Victima);

		parent::tearDown();
	}

}
