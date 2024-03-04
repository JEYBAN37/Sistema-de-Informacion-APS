<?php
App::uses('Sociambientale', 'Model');

/**
 * Sociambientale Test Case
 *
 */
class SociambientaleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sociambientale',
		'app.responsable',
		'app.dimension',
		'app.convocatoria',
		'app.instrumento',
		'app.criterio',
		'app.compromiso',
		'app.conclusion',
		'app.subcriterio',
		'app.verificacion',
		'app.ubicacion',
		'app.vivienda',
		'app.tenencia',
		'app.pared',
		'app.piso',
		'app.techo',
		'app.riesgoexterno',
		'app.acceso',
		'app.transporte',
		'app.riesgo',
		'app.aguaservicio',
		'app.diposicionexcreta',
		'app.aguaresiduales',
		'app.basura',
		'app.combustible',
		'app.mascotas',
		'app.vector',
		'app.enferemedadmenor',
		'app.enferemedadmayor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Sociambientale = ClassRegistry::init('Sociambientale');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sociambientale);

		parent::tearDown();
	}

}
