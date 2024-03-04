<?php
/**
 * SocialeFixture
 *
 */
class SocialeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'fecha' => array('type' => 'date', 'null' => false, 'default' => null),
		'usuario_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'nombre_org' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'comuna_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'corregimiento' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'barrio_vereda' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'direccion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'telefono' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'correo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'web' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'nivel' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'repersentante' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'poblacion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'objetivo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'sociedad_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'registro' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'agente_id' => array('column' => 'usuario_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish2_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'fecha' => '2014-07-15',
			'usuario_id' => 1,
			'nombre_org' => 1,
			'comuna_id' => 1,
			'corregimiento' => 'Lorem ipsum dolor sit amet',
			'barrio_vereda' => 'Lorem ipsum dolor sit amet',
			'direccion' => 'Lorem ipsum dolor sit amet',
			'telefono' => 1,
			'correo' => 'Lorem ipsum dolor sit amet',
			'web' => 'Lorem ipsum dolor sit amet',
			'nivel' => 'Lorem ipsum dolor sit amet',
			'repersentante' => 1,
			'poblacion' => 'Lorem ipsum dolor sit amet',
			'objetivo' => 'Lorem ipsum dolor sit amet',
			'sociedad_id' => 1,
			'registro' => '2014-07-15 19:43:02'
		),
	);

}
