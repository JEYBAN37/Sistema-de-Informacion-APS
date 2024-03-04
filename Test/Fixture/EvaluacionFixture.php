<?php
/**
 * EvaluacionFixture
 *
 */
class EvaluacionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'subcriterios_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'num_historias_evaluadas' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'hcl_1' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'hcl_2' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'hcl_3' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'hcl_4' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'hcl_5' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'hcl_6' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'hcl_7' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'hcl_8' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'hcl_9' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'hcl_10' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'observacion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'subcriterios_id' => 1,
			'num_historias_evaluadas' => 1,
			'hcl_1' => 1,
			'hcl_2' => 1,
			'hcl_3' => 1,
			'hcl_4' => 1,
			'hcl_5' => 1,
			'hcl_6' => 1,
			'hcl_7' => 1,
			'hcl_8' => 1,
			'hcl_9' => 1,
			'hcl_10' => 1,
			'observacion' => 'Lorem ipsum dolor sit amet',
			'created' => '2021-05-06 05:23:52',
			'modified' => '2021-05-06 05:23:52'
		),
	);

}
