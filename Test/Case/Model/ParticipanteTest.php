<?php
App::uses('Participante', 'Model');

/**
 * Participante Test Case
 *
 */
class ParticipanteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.participante',
		'app.usuario',
		'app.documento',
		'app.day',
		'app.month',
		'app.fecha',
		'app.genero',
		'app.group',
		'app.ano',
		'app.mes',
		'app.asistencia',
		'app.comunitario',
		'app.publico',
		'app.responsable',
		'app.eje',
		'app.actividad',
		'app.prioridad',
		'app.sistema',
		'app.sociale',
		'app.edad',
		'app.estudio',
		'app.preferencia',
		'app.grupo',
		'app.victima',
		'app.comuna'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Participante = ClassRegistry::init('Participante');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Participante);

		parent::tearDown();
	}

}
