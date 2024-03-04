<?php
App::uses('Comunitario', 'Model');

/**
 * Comunitario Test Case
 *
 */
class ComunitarioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.comunitario',
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
		'app.actividad',
		'app.comuna',
		'app.responsable',
		'app.eje',
		'app.prioridad',
		'app.sistema',
		'app.metodo',
		'app.participante',
		'app.edad',
		'app.estudio',
		'app.preferencia',
		'app.grupo',
		'app.victima',
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
		$this->Comunitario = ClassRegistry::init('Comunitario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Comunitario);

		parent::tearDown();
	}

}
