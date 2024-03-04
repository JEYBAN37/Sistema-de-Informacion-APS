<?php
App::uses('Ano', 'Model');

/**
 * Ano Test Case
 *
 */
class AnoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ano',
		'app.participante',
		'app.usuario',
		'app.documento',
		'app.day',
		'app.month',
		'app.fecha',
		'app.genero',
		'app.group',
		'app.mes',
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
		$this->Ano = ClassRegistry::init('Ano');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ano);

		parent::tearDown();
	}

}
