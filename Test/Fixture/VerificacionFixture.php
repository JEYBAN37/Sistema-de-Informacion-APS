<?php
/**
 * VerificacionFixture
 *
 */
class VerificacionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'dimesion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'instrumento_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'criterio_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'subcriterio_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'evaluacion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'dimesion_id' => 1,
			'instrumento_id' => 1,
			'criterio_id' => 1,
			'subcriterio_id' => 1,
			'evaluacion_id' => 1
		),
	);

}
