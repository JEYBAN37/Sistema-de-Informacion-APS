<?php
App::uses('Procesoregristro', 'Model');

/**
 * Procesoregristro Test Case
 *
 */
class ProcesoregristroTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.procesoregristro',
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
		'app.plsmomento',
		'app.prosesion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Procesoregristro = ClassRegistry::init('Procesoregristro');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Procesoregristro);

		parent::tearDown();
	}

}
