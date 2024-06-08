<?php
/**
 * ReporteFixture
 *
 */
class ReporteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'familia_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'primerainfancia_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'infantil_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'adolescencia_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'familia_id' => 1,
			'primerainfancia_id' => 1,
			'infantil_id' => 1,
			'adolescencia_id' => 1
		),
	);

}
