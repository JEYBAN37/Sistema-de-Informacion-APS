<?php
/**
 * ActividadFixture
 *
 */
class ActividadFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'hora_inicio' => array('type' => 'time', 'null' => false, 'default' => null),
		'hora_final' => array('type' => 'time', 'null' => false, 'default' => null),
		'tema' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'fecha' => array('type' => 'date', 'null' => false, 'default' => null),
		'lugar' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'comuna_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'corregimiento' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'barrio_vereda' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'direccion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'responsable_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'eje_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'prioridad_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'sesion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'poblacion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'metodo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'objetivo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'apoyo_externo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'registro' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'eje_id' => array('column' => array('eje_id', 'prioridad_id'), 'unique' => 0),
			'responsable_id' => array('column' => 'responsable_id', 'unique' => 0),
			'acciones_cb_ibfk_3' => array('column' => 'prioridad_id', 'unique' => 0)
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
			'hora_inicio' => '19:45:37',
			'hora_final' => '19:45:37',
			'tema' => 'Lorem ipsum dolor sit amet',
			'fecha' => '2014-07-15',
			'lugar' => 'Lorem ipsum dolor sit amet',
			'comuna_id' => 1,
			'corregimiento' => 'Lorem ipsum dolor sit amet',
			'barrio_vereda' => 'Lorem ipsum dolor sit amet',
			'direccion' => 'Lorem ipsum dolor sit amet',
			'responsable_id' => 1,
			'eje_id' => 1,
			'prioridad_id' => 1,
			'sesion' => 'Lor',
			'poblacion' => 'Lorem ipsum d',
			'metodo_id' => 1,
			'objetivo' => 'Lorem ipsum dolor sit amet',
			'apoyo_externo' => 'Lorem ipsum dolor sit amet',
			'registro' => '2014-07-15 19:45:37'
		),
	);

}
