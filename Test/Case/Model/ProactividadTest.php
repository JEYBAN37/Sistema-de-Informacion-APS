<?php
App::uses('Proactividad', 'Model');

/**
 * Proactividad Test Case
 *
 */
class ProactividadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.personas_actividad',
		'app.institucion',
		'app.participantesacta',
		'app.participantesevento',
		'app.infoevento',
		'app.participantesproceso',
		'app.procesoregistro',
		'app.plsesion',
		'app.plsmomento',
		'app.participantesprocesos',
		'app.productos_actividad',
		'app.actividades_view_test'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Proactividad = ClassRegistry::init('Proactividad');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Proactividad);

		parent::tearDown();
	}

}
