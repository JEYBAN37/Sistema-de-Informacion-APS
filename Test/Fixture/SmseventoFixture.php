<?php
/**
 * SmseventoFixture
 *
 */
class SmseventoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'fuenteevento_id' => array('type' => 'integer', 'null' => false),
		'dimension_id' => array('type' => 'integer', 'null' => false),
		'evento_id' => array('type' => 'integer', 'null' => false),
		'ubicaciones_id' => array('type' => 'integer', 'null' => false),
		'fechareporte' => array('type' => 'date', 'null' => false),
		'entidad_id' => array('type' => 'integer', 'null' => false),
		'identificacion' => array('type' => 'integer', 'null' => false),
		'nombres' => array('type' => 'string', 'null' => false, 'length' => 50),
		'apellidos' => array('type' => 'string', 'null' => false, 'length' => 50),
		'fechanac' => array('type' => 'date', 'null' => false),
		'edad' => array('type' => 'integer', 'null' => false),
		'regimen' => array('type' => 'string', 'null' => false, 'length' => 60),
		'aseguradora_id' => array('type' => 'integer', 'null' => false),
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
			'fuenteevento_id' => 1,
			'dimension_id' => 1,
			'evento_id' => 1,
			'ubicaciones_id' => 1,
			'fechareporte' => '2016-08-28',
			'entidad_id' => 1,
			'identificacion' => 1,
			'nombres' => 'Lorem ipsum dolor sit amet',
			'apellidos' => 'Lorem ipsum dolor sit amet',
			'fechanac' => '2016-08-28',
			'edad' => 1,
			'regimen' => 'Lorem ipsum dolor sit amet',
			'aseguradora_id' => 1
		),
	);

}
