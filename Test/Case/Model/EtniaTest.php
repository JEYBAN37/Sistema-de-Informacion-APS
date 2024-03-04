<?php
App::uses('Etnia', 'Model');

/**
 * Etnia Test Case
 *
 */
class EtniaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.etnia',
		'app.persona',
		'app.genero',
		'app.preferencia',
		'app.estudio',
		'app.poblacion',
		'app.actividad',
		'app.ubicacion',
		'app.organizacion',
		'app.sociedad',
		'app.sector',
		'app.proyecto',
		'app.entidad',
		'app.entidadproyecto',
		'app.responsable',
		'app.personas_actividad',
		'app.aseguradora'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Etnia = ClassRegistry::init('Etnia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Etnia);

		parent::tearDown();
	}

}
