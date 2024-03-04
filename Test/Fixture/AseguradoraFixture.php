<?php
/**
 * AseguradoraFixture
 *
 */
class AseguradoraFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'aseguradora' => array('type' => 'string', 'null' => false, 'length' => 150),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id')
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
			'aseguradora' => 'Lorem ipsum dolor sit amet'
		),
	);

}
