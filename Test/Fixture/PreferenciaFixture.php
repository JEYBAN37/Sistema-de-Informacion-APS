<?php
/**
 * PreferenciaFixture
 *
 */
class PreferenciaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'preferencia' => array('type' => 'string', 'null' => false, 'length' => 15),
		'caracteristicas' => array('type' => 'string', 'null' => false, 'length' => 200),
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
			'preferencia' => 'Lorem ipsum d',
			'caracteristicas' => 'Lorem ipsum dolor sit amet'
		),
	);

}
