<?php
App::uses('Infoevento', 'Model');

/**
 * Infoevento Test Case
 *
 */
class InfoeventoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.infoevento',
		'app.ubicacion',
		'app.acta_view_test',
		'app.producto',
		'app.actividad',
		'app.responsable',
		'app.productosactividad',
		'app.acta',
		'app.referente',
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
		'app.productos_actividad',
		'app.actividades_view_test',
		'app.plsesion',
		'app.plsmomento',
		'app.canalizacion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Infoevento = ClassRegistry::init('Infoevento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Infoevento);

		parent::tearDown();
	}

}
