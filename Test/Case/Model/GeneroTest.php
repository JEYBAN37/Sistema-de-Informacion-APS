<?php
App::uses('Genero', 'Model');

/**
 * Genero Test Case
 *
 */
class GeneroTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.genero',
		'app.usuario',
		'app.documento',
		'app.day',
		'app.month',
		'app.fecha',
		'app.group',
		'app.ano',
		'app.mes',
		'app.comunitario',
		'app.comuna',
		'app.participante',
		'app.edad',
		'app.estudio',
		'app.preferencia',
		'app.grupo',
		'app.victima',
		'app.publico',
		'app.registro',
		'app.actividad',
		'app.responsable',
		'app.eje',
		'app.prioridad',
		'app.sistema',
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
		$this->Genero = ClassRegistry::init('Genero');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Genero);

		parent::tearDown();
	}

}
