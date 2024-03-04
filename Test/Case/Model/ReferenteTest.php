<?php
App::uses('Referente', 'Model');

/**
 * Referente Test Case
 *
 */
class ReferenteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.referente'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Referente = ClassRegistry::init('Referente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Referente);

		parent::tearDown();
	}

}
