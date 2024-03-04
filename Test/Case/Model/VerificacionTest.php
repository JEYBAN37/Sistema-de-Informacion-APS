<?php
App::uses('Verificacion', 'Model');

/**
 * Verificacion Test Case
 *
 */
class VerificacionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.verificacion',
		'app.dimesion',
		'app.instrumento',
		'app.dimension',
		'app.convocatoria',
		'app.responsable',
		'app.compromiso',
		'app.conclusion',
		'app.criterio',
		'app.subcriterio',
		'app.evaluacion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Verificacion = ClassRegistry::init('Verificacion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Verificacion);

		parent::tearDown();
	}

}
