<?php
/**
 * ParticipanteFixture
 *
 */
class ParticipanteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'fecha' => array('type' => 'date', 'null' => false, 'default' => null),
		'usuario_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'edad_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'estudio_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'preferencia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'grupo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'victima_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'actividad_economica' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'tiempo_trabajo' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 15, 'unsigned' => false),
		'sector' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'comuna_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'corregimiento' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'barrio_vereda' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'estrato' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => false),
		'regimen' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'eps' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'discapacidad' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'tipo_discapacidad' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'pertenece_org' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'nombre_org' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'registro' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'edad_id' => array('column' => 'edad_id', 'unique' => 0),
			'agentes_id' => array('column' => 'usuario_id', 'unique' => 0),
			'prefsex_id' => array('column' => 'preferencia_id', 'unique' => 0),
			'etnia_id' => array('column' => 'grupo_id', 'unique' => 0),
			'escolaridad_id' => array('column' => 'estudio_id', 'unique' => 0),
			'victima_id' => array('column' => 'victima_id', 'unique' => 0),
			'comuna_id' => array('column' => 'comuna_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish2_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'fecha' => '2014-07-15',
			'usuario_id' => 1,
			'edad_id' => 1,
			'estudio_id' => 1,
			'preferencia_id' => 1,
			'grupo_id' => 1,
			'victima_id' => 1,
			'actividad_economica' => 'Lorem ipsum d',
			'tiempo_trabajo' => 1,
			'sector' => '',
			'comuna_id' => 1,
			'corregimiento' => 'Lorem ipsum d',
			'barrio_vereda' => 'Lorem ipsum dolor ',
			'estrato' => 1,
			'regimen' => 'Lorem ip',
			'eps' => 'Lorem ipsum d',
			'discapacidad' => 'Lorem ipsum dolor sit amet',
			'tipo_discapacidad' => 'Lorem ipsum dolor sit amet',
			'pertenece_org' => 'Lorem ip',
			'nombre_org' => 'Lorem ipsum dolor sit amet',
			'registro' => '2014-07-15 19:36:03'
		),
	);

}
