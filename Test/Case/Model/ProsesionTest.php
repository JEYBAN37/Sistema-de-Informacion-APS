<?php
App::uses('Prosesion', 'Model');

/**
 * Prosesion Test Case
 *
 */
class ProsesionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.prosesion',
		'app.proactividad',
		'app.producto',
		'app.actividad',
		'app.ubicacion',
		'app.acta_view_test',
		'app.acta',
		'app.responsable',
		'app.productosactividad',
		'app.referente',
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
		'app.personas_actividad',
		'app.participantesevento',
		'app.infoevento',
		'app.productos_actividad',
		'app.actividades_view_test',
		'app.plsesion',
		'app.plsmomento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Prosesion = ClassRegistry::init('Prosesion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Prosesion);

		parent::tearDown();
	}

}
