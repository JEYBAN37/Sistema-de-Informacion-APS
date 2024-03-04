<?php
/**
 * EquipoFixture
 *
 */
class EquipoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'dependencia' => array('type' => 'string', 'null' => false, 'length' => 200),
		'eje' => array('type' => 'string', 'null' => false, 'length' => 200),
		'dimension' => array('type' => 'string', 'null' => false, 'length' => 200),
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
			'dependencia' => 'Lorem ipsum dolor sit amet',
			'eje' => 'Lorem ipsum dolor sit amet',
			'dimension' => 'Lorem ipsum dolor sit amet'
		),
	);

}
