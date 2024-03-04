<?php
/**
 * UbicacionFixture
 *
 */
class UbicacionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'zona' => array('type' => 'string', 'null' => false, 'length' => 50),
		'tipo1' => array('type' => 'string', 'null' => false, 'length' => 50),
		'comuna' => array('type' => 'string', 'null' => false, 'length' => 100),
		'tipo2' => array('type' => 'string', 'null' => false, 'length' => 50),
		'barrio' => array('type' => 'string', 'null' => false, 'length' => 100),
		'estrato' => array('type' => 'integer', 'null' => false),
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
			'zona' => 'Lorem ipsum dolor sit amet',
			'tipo1' => 'Lorem ipsum dolor sit amet',
			'comuna' => 'Lorem ipsum dolor sit amet',
			'tipo2' => 'Lorem ipsum dolor sit amet',
			'barrio' => 'Lorem ipsum dolor sit amet',
			'estrato' => 1
		),
	);

}
