<?php
/**
 * SubcriterioFixture
 *
 */
class SubcriterioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'criterio_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'subcriterio' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'porcentaje' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '11,2', 'unsigned' => false),
		'definicion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'criterio_id' => 1,
			'subcriterio' => 'Lorem ipsum dolor sit amet',
			'porcentaje' => '',
			'definicion' => 'Lorem ipsum dolor sit amet'
		),
	);

}
