<?php
App::uses('Tiempo', 'Model');

/**
 * Tiempo Test Case
 *
 */
class TiempoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tiempo',
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
		'app.publico',
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
		$this->Tiempo = ClassRegistry::init('Tiempo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tiempo);

		parent::tearDown();
	}

}
