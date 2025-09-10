<?php
/**
 * PersonasCaracterizadaFixture
 *
 */
class PersonasCaracterizadaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'familia_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sociambiental_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'fecha' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'direccion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'apartamento' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'latitud' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'longitud' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'apellidosfamilia' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'profesional_EBS' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'microterritorio' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'territorio' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'comuna' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ID_persona' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'TD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'NumeroDoc' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'primerapellido' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'segundoapellido' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'primernombre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'segundonombre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fechanac' => array('type' => 'date', 'null' => true, 'default' => null),
		'edad' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'sexo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'aseguradora' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'regimen' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'estadoafiliacion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'telefono' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			
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
			'familia_id' => 1,
			'sociambiental_id' => 1,
			'fecha' => 1726103424,
			'direccion' => 'Lorem ipsum dolor sit amet',
			'apartamento' => 'Lorem ip',
			'latitud' => 'Lorem ipsum dolor sit amet',
			'longitud' => 'Lorem ipsum dolor sit amet',
			'apellidosfamilia' => 'Lorem ipsum dolor sit amet',
			'profesional_EBS' => 'Lorem ipsum dolor sit amet',
			'microterritorio' => 'Lorem ipsum dolor sit amet',
			'territorio' => 'Lorem ipsum dolor sit amet',
			'comuna' => 'Lorem ipsum dolor sit amet',
			'ID_persona' => 1,
			'TD' => 'Lorem ipsum dolor sit amet',
			'NumeroDoc' => 'Lorem ipsum dolor sit amet',
			'primerapellido' => 'Lorem ipsum dolor sit amet',
			'segundoapellido' => 'Lorem ipsum dolor sit amet',
			'primernombre' => 'Lorem ipsum dolor sit amet',
			'segundonombre' => 'Lorem ipsum dolor sit amet',
			'fechanac' => '2024-09-12',
			'edad' => 'Lorem ip',
			'sexo' => 'Lorem ipsum dolor sit amet',
			'aseguradora' => 'Lorem ipsum dolor sit amet',
			'regimen' => 'Lorem ipsum dolor sit amet',
			'estadoafiliacion' => 'Lorem ipsum dolor sit amet',
			'telefono' => 'Lorem ipsum d'
		),
	);

}
