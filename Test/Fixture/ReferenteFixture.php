<?php
/**
 * ReferenteFixture
 *
 */
class ReferenteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'tipodoc' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'numero' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 30, 'unsigned' => false),
		'nombres' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'fecha_nac' => array('type' => 'date', 'null' => false, 'default' => null),
		'celular' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 11, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'telefono' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'correo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'profesion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'cargo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'familiar' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 60, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'parentesco' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'tel_familiar' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_spanish_ci', 'engine' => 'InnoDB')
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
			'numero' => 1,
			'nombres' => 'Lorem ipsum dolor sit amet',
			'fecha_nac' => '2017-09-08',
			'celular' => 'Lorem ips',
			'telefono' => 1,
			'correo' => 'Lorem ipsum dolor sit amet',
			'profesion' => 'Lorem ipsum dolor sit amet',
			'cargo' => 'Lorem ipsum dolor sit amet',
			'familiar' => 'Lorem ipsum dolor sit amet',
			'parentesco' => 'Lorem ipsum dolor sit amet',
			'tel_familiar' => 1
		),
	);

}
