<?php
App::uses('Sociedad', 'Model');

/**
 * Sociedad Test Case
 *
 */
class SociedadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sociedad',
		'app.sociale',
		'app.usuario',
		'app.documento',
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
		'app.integrante',
		'app.responsable',
		'app.eje',
		'app.prioridad',
		'app.sistema',
		'app.registro',
		'app.comunitario',
		'app.publico'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Sociedad = ClassRegistry::init('Sociedad');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sociedad);

		parent::tearDown();
	}

}
