<?php
/**
 * DimensionFixture
 *
 */
class DimensionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nombre_dimension' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'definicion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'nombre_dimension'), 'unique' => 1)
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
			'nombre_dimension' => 'Lorem ipsum dolor sit amet',
			'definicion' => 'Lorem ipsum dolor sit amet'
		),
	);

}
