<?php
App::uses('Mes', 'Model');

/**
 * Mes Test Case
 *
 */
class MesTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mes',
		'app.participante',
		'app.usuario',
		'app.documento',
		'app.day',
		'app.month',
		'app.fecha',
		'app.genero',
		'app.group',
		'app.ano',
		'app.comunitario',
		'app.comuna',
		'app.publico',
		'app.registro',
		'app.actividad',
		'app.responsable',
		'app.eje',
		'app.prioridad',
		'app.sistema',
		'app.sociale',
		'app.sociedad',
		'app.edad',
		'app.estudio',
		'app.preferencia',
		'app.grupo',
		'app.victima'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mes = ClassRegistry::init('Mes');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mes);

		parent::tearDown();
	}

}
