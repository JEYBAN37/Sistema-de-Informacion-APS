<?php
App::uses('Publico', 'Model');

/**
 * Publico Test Case
 *
 */
class PublicoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.publico',
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
		'app.comuna',
		'app.responsable',
		'app.eje',
		'app.actividad',
		'app.prioridad',
		'app.sistema',
		'app.sociale'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Publico = ClassRegistry::init('Publico');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Publico);

		parent::tearDown();
	}

}
