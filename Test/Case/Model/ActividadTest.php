<?php
App::uses('Actividad', 'Model');

/**
 * Actividad Test Case
 *
 */
class ActividadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.actividad',
		'app.comuna',
		'app.responsable',
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
		'app.participante',
		'app.edad',
		'app.estudio',
		'app.preferencia',
		'app.grupo',
		'app.victima',
		'app.publico',
		'app.sociale',
		'app.sociedad',
		'app.eje',
		'app.prioridad',
		'app.sistema',
		'app.metodo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Actividad = ClassRegistry::init('Actividad');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Actividad);

		parent::tearDown();
	}

}
