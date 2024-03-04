<?php
App::uses('Plsmomento', 'Model');

/**
 * Plsmomento Test Case
 *
 */
class PlsmomentoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.plsmomento',
		'app.plsesion',
		'app.responsable',
		'app.actividad',
		'app.ubicacion',
		'app.acta',
		'app.producto',
		'app.productosactividad',
		'app.referente',
		'app.agent',
		'app.canalizacion',
		'app.aseguradora',
		'app.persona',
		'app.estudio',
		'app.poblacion',
		'app.organizacion',
		'app.proyecto',
		'app.entidad',
		'app.smsevento',
		'app.fuenteevento',
		'app.dimension',
		'app.evento',
		'app.ubicaciones',
		'app.sociedad',
		'app.sector',
		'app.institucion',
		'app.personas_actividad'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Plsmomento = ClassRegistry::init('Plsmomento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Plsmomento);

		parent::tearDown();
	}

}
