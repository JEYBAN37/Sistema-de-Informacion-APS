<?php
App::uses('Smsevento', 'Model');

/**
 * Smsevento Test Case
 *
 */
class SmseventoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.smsevento',
		'app.fuenteevento',
		'app.dimension',
		'app.evento',
		'app.ubicaciones',
		'app.entidad',
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
		'app.entidadproyecto',
		'app.responsable',
		'app.personas_actividad'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Smsevento = ClassRegistry::init('Smsevento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Smsevento);

		parent::tearDown();
	}

}
