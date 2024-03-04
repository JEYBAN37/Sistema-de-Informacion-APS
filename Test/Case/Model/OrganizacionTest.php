<?php
App::uses('Organizacion', 'Model');

/**
 * Organizacion Test Case
 *
 */
class OrganizacionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.organizacion',
		'app.persona',
		'app.ubicacion',
		'app.poblacion',
		'app.sociedad',
		'app.sociale',
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
		'app.genero',
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
		'app.sector',
		'app.proyecto'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Organizacion = ClassRegistry::init('Organizacion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Organizacion);

		parent::tearDown();
	}

}
