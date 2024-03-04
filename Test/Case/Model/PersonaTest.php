<?php
App::uses('Persona', 'Model');

/**
 * Persona Test Case
 *
 */
class PersonaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.persona',
		'app.genero',
		'app.usuario',
		'app.documento',
		'app.day',
		'app.month',
		'app.fecha',
		'app.edad',
		'app.participante',
		'app.actividad',
		'app.comuna',
		'app.integrante',
		'app.group',
		'app.ano',
		'app.mes',
		'app.responsable',
		'app.eje',
		'app.prioridad',
		'app.sistema',
		'app.usuarios_actividad',
		'app.estudio',
		'app.preferencia',
		'app.grupo',
		'app.victima',
		'app.comunitario',
		'app.cobertura',
		'app.publico',
		'app.sociale',
		'app.sociedad',
		'app.organizacion',
		'app.ubicacion',
		'app.proyecto',
		'app.poblacion',
		'app.sector',
		'app.etnia',
		'app.aseguradora',
		'app.personaactividad'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Persona = ClassRegistry::init('Persona');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Persona);

		parent::tearDown();
	}

}
