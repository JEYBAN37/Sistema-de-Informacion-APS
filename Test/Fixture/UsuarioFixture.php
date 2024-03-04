<?php
/**
 * UsuarioFixture
 *
 */
class UsuarioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'documento_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'numero' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'unique', 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'nombres' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'apellidos' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'day_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'month_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fecha_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'genero_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'group_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'celular' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 21, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'telefono' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'correo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'profesion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'cargo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'ano_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'mes_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fecha_reg' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'cedula' => array('column' => 'numero', 'unique' => 1),
			'genero_id' => array('column' => 'genero_id', 'unique' => 0)
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
			'documento_id' => 1,
			'numero' => 'Lorem ipsum dolor ',
			'nombres' => 'Lorem ipsum dolor sit amet',
			'apellidos' => 'Lorem ipsum dolor sit amet',
			'day_id' => 1,
			'month_id' => 1,
			'fecha_id' => 1,
			'genero_id' => 1,
			'group_id' => 1,
			'celular' => 'Lorem ipsum dolor s',
			'telefono' => 'Lorem ipsum d',
			'correo' => 'Lorem ipsum dolor sit amet',
			'profesion' => 'Lorem ipsum dolor sit amet',
			'cargo' => 'Lorem ipsum dolor sit amet',
			'ano_id' => 1,
			'mes_id' => 1,
			'fecha_reg' => 1405481059
		),
	);

}
