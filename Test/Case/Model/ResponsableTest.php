<?php
App::uses('Responsable', 'Model');

/**
 * Responsable Test Case
 *
 */
class ResponsableTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.responsable',
		'app.usuario',
		'app.documento',
		'app.day',
		'app.month',
		'app.fecha',
		'app.genero',
		'app.group',
		'app.ano',
		'app.participante',
		'app.edad',
		'app.estudio',
		'app.preferencia',
		'app.grupo',
		'app.victima',
		'app.mes',
		'app.comuna',
		'app.actividad',
		'app.eje',
		'app.prioridad',
		'app.registro',
		'app.comunitario',
		'app.publico',
		'app.sociale',
		'app.sociedad',
		'app.sistema'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Responsable = ClassRegistry::init('Responsable');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Responsable);

		parent::tearDown();
	}

}
