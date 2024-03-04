<?php
/**
 * PersonaactividadFixture
 *
 */
class PersonaactividadFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'persona_id' => array('type' => 'integer', 'null' => false),
		'actividad_id' => array('type' => 'integer', 'null' => false),
		'registro' => array('type' => 'datetime', 'null' => false),
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
			'persona_id' => 1,
			'actividad_id' => 1,
			'registro' => '2016-08-24 15:56:58'
		),
	);

}
