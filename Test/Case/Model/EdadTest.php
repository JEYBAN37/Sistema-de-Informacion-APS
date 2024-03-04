<?php
App::uses('Edad', 'Model');

/**
 * Edad Test Case
 *
 */
class EdadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.edad',
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
		$this->Edad = ClassRegistry::init('Edad');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Edad);

		parent::tearDown();
	}

}
