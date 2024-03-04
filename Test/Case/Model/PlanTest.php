<?php
App::uses('Plan', 'Model');

/**
 * Plan Test Case
 *
 */
class PlanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.plan',
		'app.responsable',
		'app.actividad',
		'app.ubicacion',
		'app.acta',
		'app.producto',
		'app.productos_actividad',
		'app.productosacta',
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
		'app.personas_actividad',
		'app.institucion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Plan = ClassRegistry::init('Plan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Plan);

		parent::tearDown();
	}

}
