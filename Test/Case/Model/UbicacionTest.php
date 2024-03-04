<?php
App::uses('Ubicacion', 'Model');

/**
 * Ubicacion Test Case
 *
 */
class UbicacionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ubicacion',
		'app.acta_view_test',
		'app.producto',
		'app.actividad',
		'app.responsable',
		'app.acta',
		'app.productosactividad',
		'app.referente',
		'app.actividades2',
		'app.actividades_view_test',
		'app.plan',
		'app.plsesion',
		'app.plsmomento',
		'app.productos_original',
		'app.productosactividades2017',
		'app.productosoriginal',
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
		'app.personas_actividad',
		'app.institucion',
		'app.canalizacion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ubicacion = ClassRegistry::init('Ubicacion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ubicacion);

		parent::tearDown();
	}

}
