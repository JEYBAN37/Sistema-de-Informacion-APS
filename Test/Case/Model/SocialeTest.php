<?php
App::uses('Sociale', 'Model');

/**
 * Sociale Test Case
 *
 */
class SocialeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sociale',
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
		'app.edad',
		'app.estudio',
		'app.preferencia',
		'app.grupo',
		'app.victima',
		'app.comuna',
		'app.publico',
		'app.responsable',
		'app.eje',
		'app.actividad',
		'app.prioridad',
		'app.sistema',
		'app.sociedad'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Sociale = ClassRegistry::init('Sociale');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sociale);

		parent::tearDown();
	}

}
