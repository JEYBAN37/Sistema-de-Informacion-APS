<?php
App::uses('ProductosActividad', 'Model');

/**
 * ProductosActividad Test Case
 *
 */
class ProductosActividadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.productos_actividad',
		'app.producto',
		'app.actividad',
		'app.ubicacion',
		'app.acta_view_test',
		'app.acta',
		'app.responsable',
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
		'app.institucion',
		'app.actividades_view_test',
		'app.plsesion',
		'app.plsmomento',
		'app.referente'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductosActividad = ClassRegistry::init('ProductosActividad');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductosActividad);

		parent::tearDown();
	}

}
