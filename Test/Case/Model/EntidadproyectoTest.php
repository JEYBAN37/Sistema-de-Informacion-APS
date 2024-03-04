<?php
App::uses('Entidadproyecto', 'Model');

/**
 * Entidadproyecto Test Case
 *
 */
class EntidadproyectoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.entidadproyecto',
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
		'app.responsable'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Entidadproyecto = ClassRegistry::init('Entidadproyecto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Entidadproyecto);

		parent::tearDown();
	}

}
