<?php
/**
 * ActividadesViewTestFixture
 *
 */
class ActividadesViewTestFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false, 'comment' => 'Identificador', 'key' => 'primary'),
		'fecha' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => 'Fecha de realización de la actividad'),
		'tema' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 300, 'collate' => 'latin1_spanish_ci', 'comment' => 'Nombre de la temática desarrollada', 'charset' => 'latin1'),
		'responsable_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => 'Campo que relaciona a un integrante del equipo CB'),
		'nombres' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'ubicacion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => 'BD_ Barrio_Comuna para asociación'),
		'comuna' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'barrio' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'zona' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'producto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'lineas' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'dimensiones' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'nombredim' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'costodim' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'linormativas' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'resultado' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'activity' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 500, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'vidacursos' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'entorno' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'tecnologias' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'porcproducto' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'tarea' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 700, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'porctareas' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'clasobjetivos' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'indexes' => array(
			
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'fecha' => '2019-04-11',
			'tema' => 'Lorem ipsum dolor sit amet',
			'responsable_id' => 1,
			'nombres' => 'Lorem ipsum dolor sit amet',
			'ubicacion_id' => 1,
			'comuna' => 'Lorem ipsum dolor sit amet',
			'barrio' => 'Lorem ipsum dolor sit amet',
			'zona' => 'Lorem ipsum dolor sit amet',
			'producto_id' => 1,
			'lineas' => 'Lorem ipsum dolor sit amet',
			'dimensiones' => 'Lorem ipsum dolor sit amet',
			'nombredim' => 'Lorem ipsum dolor ',
			'costodim' => 'Lorem ipsum dolor sit amet',
			'linormativas' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'resultado' => 'Lorem ipsum dolor sit amet',
			'activity' => 'Lorem ipsum dolor sit amet',
			'vidacursos' => 'Lorem ipsum dolor sit amet',
			'entorno' => 'Lorem ipsum dolor sit amet',
			'tecnologias' => 'Lorem ipsum dolor sit amet',
			'porcproducto' => 'Lorem ipsum dolor sit amet',
			'tarea' => 'Lorem ipsum dolor sit amet',
			'porctareas' => 'Lorem ipsum dolor sit amet',
			'clasobjetivos' => 'Lorem ipsum dolor sit amet'
		),
	);

}
