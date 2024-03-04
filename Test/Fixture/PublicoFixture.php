<?php
/**
 * PublicoFixture
 *
 */
class PublicoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'fecha' => array('type' => 'date', 'null' => false, 'default' => null),
		'usuario_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'nombre_inst' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'representante' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'comuna_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'corregimiento' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'barrio_vereda' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'direccion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'telefono' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'correo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'web' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'nivel' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'objetivo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
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
			'nombre_inst' => 'Lorem ipsum dolor sit amet',
			'representante' => 'Lorem ipsum dolor sit amet',
			'comuna_id' => 1,
			'corregimiento' => 'Lorem ipsum dolor sit amet',
			'barrio_vereda' => 'Lorem ipsum dolor sit amet',
			'direccion' => 'Lorem ipsum dolor sit amet',
			'telefono' => 1,
			'correo' => 'Lorem ipsum dolor sit amet',
			'web' => 'Lorem ipsum dolor sit amet',
			'nivel' => 'Lorem ipsum dolor sit amet',
			'objetivo' => 'Lorem ipsum dolor sit amet',
			'registro' => '2014-07-15 19:41:27'
		),
	);

}
