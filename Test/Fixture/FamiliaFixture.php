<?php
/**
 * FamiliaFixture
 *
 */
class FamiliaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'socioambiental_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'familia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'numeropersonas' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cursovidafamilia' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'lgtbi' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'estilodevidapredominante' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'antecedenteenfermedad_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'otraenferemedad' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 11, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'otraenferemedad1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'otraenferemedad2' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'riesgopsicosocial_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'riesgopsicosocial1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'riesgopsicosocial2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'programasocial_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'programasocial1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'programasocial2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'discapacidad_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'victima_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'socioambiental_id' => 1,
			'familia_id' => 1,
			'numeropersonas' => 'Lorem ip',
			'cursovidafamilia' => 'Lorem ipsum dolor sit amet',
			'lgtbi' => 'Lorem ip',
			'estilodevidapredominante' => 'Lorem ipsum dolor sit amet',
			'antecedenteenfermedad_id' => 1,
			'otraenferemedad' => 'Lorem ips',
			'otraenferemedad1' => 'Lorem ipsum dolor sit amet',
			'otraenferemedad2' => 'Lorem ipsum dolor sit amet',
			'riesgopsicosocial_id' => 1,
			'riesgopsicosocial1' => 'Lorem ipsum dolor sit amet',
			'riesgopsicosocial2' => 'Lorem ipsum dolor sit amet',
			'programasocial_id' => 1,
			'programasocial1' => 'Lorem ipsum dolor sit amet',
			'programasocial2' => 'Lorem ipsum dolor sit amet',
			'discapacidad_id' => 1,
			'victima_id' => 1
		),
	);

}
