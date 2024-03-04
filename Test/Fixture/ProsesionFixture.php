<?php
/**
 * ProsesionFixture
 *
 */
class ProsesionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'proactividad_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fecha' => array('type' => 'date', 'null' => false, 'default' => null),
		'hora_inicio' => array('type' => 'time', 'null' => false, 'default' => null),
		'hora_fin' => array('type' => 'time', 'null' => false, 'default' => null),
		'tema' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'grupo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ubicacion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'barrio' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'plsesion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'anexo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'sisproceso_dir' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fecha_registro' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'proactividad_id' => 1,
			'fecha' => '2019-07-10',
			'hora_inicio' => '23:30:52',
			'hora_fin' => '23:30:52',
			'tema' => 'Lorem ipsum dolor sit amet',
			'grupo' => 'Lorem ipsum dolor sit amet',
			'ubicacion_id' => 1,
			'barrio' => 'Lorem ipsum dolor sit amet',
			'plsesion_id' => 1,
			'anexo' => 'Lorem ipsum dolor sit amet',
			'sisproceso_dir' => 'Lorem ipsum dolor sit amet',
			'fecha_registro' => 1562794252
		),
	);

}
