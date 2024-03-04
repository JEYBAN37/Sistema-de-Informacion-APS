<?php
/**
 * ResponsableFixture
 *
 */
class ResponsableFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'tipodoc' => array('type' => 'string', 'null' => false, 'length' => 15),
		'numero' => array('type' => 'decimal', 'null' => false),
		'nombres' => array('type' => 'string', 'null' => false, 'length' => 200),
		'fecha_nac' => array('type' => 'date', 'null' => false),
		'celular' => array('type' => 'decimal', 'null' => false),
		'telefono' => array('type' => 'decimal', 'null' => false),
		'correo' => array('type' => 'string', 'null' => false, 'length' => 50),
		'profesion' => array('type' => 'string', 'null' => false, 'length' => 200),
		'cargo' => array('type' => 'string', 'null' => false, 'length' => 200),
		'familiar' => array('type' => 'string', 'null' => false, 'length' => 60),
		'parentesco' => array('type' => 'string', 'null' => false, 'length' => 50),
		'tel_familiar' => array('type' => 'decimal', 'null' => false),
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
			'tipodoc' => 'Lorem ipsum d',
			'numero' => '',
			'nombres' => 'Lorem ipsum dolor sit amet',
			'fecha_nac' => '2016-08-22',
			'celular' => '',
			'telefono' => '',
			'correo' => 'Lorem ipsum dolor sit amet',
			'profesion' => 'Lorem ipsum dolor sit amet',
			'cargo' => 'Lorem ipsum dolor sit amet',
			'familiar' => 'Lorem ipsum dolor sit amet',
			'parentesco' => 'Lorem ipsum dolor sit amet',
			'tel_familiar' => ''
		),
	);

}
