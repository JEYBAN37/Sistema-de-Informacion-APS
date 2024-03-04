<?php
App::uses('Aseguradora', 'Model');

/**
 * Aseguradora Test Case
 *
 */
class AseguradoraTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.aseguradora',
		'app.persona',
		'app.genero',
		'app.preferencia',
		'app.etnia',
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
		'app.smsevento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Aseguradora = ClassRegistry::init('Aseguradora');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Aseguradora);

		parent::tearDown();
	}

}
