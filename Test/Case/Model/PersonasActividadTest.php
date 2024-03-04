<?php
App::uses('PersonasActividad', 'Model');

/**
 * PersonasActividad Test Case
 *
 */
class PersonasActividadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.personas_actividad',
		'app.actividad',
		'app.ubicacion',
		'app.acta',
		'app.responsable',
		'app.productosactividad',
		'app.producto',
		'app.productos_actividad',
		'app.productosacta',
		'app.referente',
		'app.agent',
		'app.canalizacion',
		'app.institucion',
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
		'app.aseguradora',
		'app.sociedad',
		'app.sector',
		'app.productos*'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PersonasActividad = ClassRegistry::init('PersonasActividad');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PersonasActividad);

		parent::tearDown();
	}

}
