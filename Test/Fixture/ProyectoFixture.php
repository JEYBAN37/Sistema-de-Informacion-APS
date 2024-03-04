<?php
/**
 * ProyectoFixture
 *
 */
class ProyectoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'entidad_id' => array('type' => 'integer', 'null' => false),
		'nombreproyecto' => array('type' => 'string', 'null' => false, 'length' => 300),
		'objetivo' => array('type' => 'string', 'null' => false, 'length' => 300),
		'poblacion_id' => array('type' => 'integer', 'null' => false),
		'vigencia' => array('type' => 'date', 'null' => false),
		'duracion' => array('type' => 'integer', 'null' => false),
		'ubicacion_id' => array('type' => 'integer', 'null' => false),
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
			'entidad_id' => 1,
			'nombreproyecto' => 'Lorem ipsum dolor sit amet',
			'objetivo' => 'Lorem ipsum dolor sit amet',
			'poblacion_id' => 1,
			'vigencia' => '2016-08-29',
			'duracion' => 1,
			'ubicacion_id' => 1
		),
	);

}
