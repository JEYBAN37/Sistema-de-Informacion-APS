<?php
App::uses('Participantesevento', 'Model');

/**
 * Participantesevento Test Case
 *
 */
class ParticipanteseventoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.participantesevento',
		'app.persona',
		'app.estudio',
		'app.poblacion',
		'app.actividad',
		'app.ubicacion',
		'app.acta_view_test',
		'app.producto',
		'app.productos_actividad',
		'app.acta',
		'app.responsable',
		'app.productosactividad',
		'app.referente',
		'app.actividades_view_test',
		'app.plsesion',
		'app.plsmomento',
		'app.canalizacion',
		'app.aseguradora',
		'app.smsevento',
		'app.fuenteevento',
		'app.dimension',
		'app.evento',
		'app.ubicaciones',
		'app.entidad',
		'app.proyecto',
		'app.organizacion',
		'app.institucion',
		'app.personas_actividad',
		'app.sociedad',
		'app.sector',
		'app.infoevento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Participantesevento = ClassRegistry::init('Participantesevento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Participantesevento);

		parent::tearDown();
	}

}
