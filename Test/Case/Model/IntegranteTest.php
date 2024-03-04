<?php
App::uses('Integrante', 'Model');

/**
 * Integrante Test Case
 *
 */
class IntegranteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.integrante',
		'app.documento',
		'app.usuario',
		'app.day',
		'app.month',
		'app.fecha',
		'app.edad',
		'app.participante',
		'app.estudio',
		'app.preferencia',
		'app.grupo',
		'app.victima',
		'app.mes',
		'app.ano',
		'app.comuna',
		'app.genero',
		'app.group',
		'app.actividad',
		'app.eje',
		'app.responsable',
		'app.prioridad',
		'app.sistema',
		'app.registro',
		'app.comunitario',
		'app.publico',
		'app.sociale',
		'app.sociedad'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Integrante = ClassRegistry::init('Integrante');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Integrante);

		parent::tearDown();
	}

}
