<?php
/**
 * ProfesionFixture
 *
 */
class ProfesionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'profesion' => array('type' => 'string', 'null' => false, 'length' => 200),
		'perfilprofesion' => array('type' => 'string', 'null' => false, 'length' => 300),
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
			'profesion' => 'Lorem ipsum dolor sit amet',
			'perfilprofesion' => 'Lorem ipsum dolor sit amet'
		),
	);

}
