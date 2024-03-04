<?php
App::uses('Grupo', 'Model');

/**
 * Grupo Test Case
 *
 */
class GrupoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.grupo',
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
		'app.edad',
		'app.estudio',
		'app.preferencia',
		'app.victima'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Grupo = ClassRegistry::init('Grupo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Grupo);

		parent::tearDown();
	}

}
