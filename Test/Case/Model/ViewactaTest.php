<?php
App::uses('Viewacta', 'Model');

/**
 * Viewacta Test Case
 *
 */
class ViewactaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.viewacta',
		'app.ubicacion',
		'app.acta',
		'app.producto',
		'app.actividad',
		'app.responsable',
		'app.productosactividad',
		'app.referente',
		'app.poblacion',
		'app.organizacion',
		'app.persona',
		'app.estudio',
		'app.aseguradora',
		'app.smsevento',
		'app.fuenteevento',
		'app.dimension',
		'app.evento',
		'app.ubicaciones',
		'app.entidad',
		'app.proyecto',
		'app.sociedad',
		'app.sector',
		'app.personas_actividad',
		'app.institucion',
		'app.agent',
		'app.canalizacion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Viewacta = ClassRegistry::init('Viewacta');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Viewacta);

		parent::tearDown();
	}

}
