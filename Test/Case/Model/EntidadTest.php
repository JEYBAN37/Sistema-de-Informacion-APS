<?php
App::uses('Entidad', 'Model');

/**
 * Entidad Test Case
 *
 */
class EntidadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.entidad',
		'app.proyecto',
		'app.poblacion',
		'app.actividad',
		'app.ubicacion',
		'app.organizacion',
		'app.persona',
		'app.genero',
		'app.preferencia',
		'app.etnia',
		'app.estudio',
		'app.aseguradora',
		'app.smsevento',
		'app.fuenteevento',
		'app.dimension',
		'app.evento',
		'app.ubicaciones',
		'app.sociedad',
		'app.sector',
		'app.personas_actividad',
		'app.responsable',
		'app.entidadproyecto'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Entidad = ClassRegistry::init('Entidad');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Entidad);

		parent::tearDown();
	}

}
