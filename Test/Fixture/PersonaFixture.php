<?php
/**
 * PersonaFixture
 *
 */
class PersonaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'fecha' => array('type' => 'date', 'null' => true),
		'tipoidoc' => array('type' => 'string', 'null' => true, 'length' => 10),
		'identificacion' => array('type' => 'string', 'null' => true, 'length' => 15),
		'nombres' => array('type' => 'string', 'null' => true, 'length' => 50),
		'apellidos' => array('type' => 'string', 'null' => true, 'length' => 50),
		'fechanac' => array('type' => 'date', 'null' => true),
		'edad' => array('type' => 'integer', 'null' => true),
		'grupo' => array('type' => 'string', 'null' => true, 'length' => 50),
		'genero_id' => array('type' => 'integer', 'null' => true),
		'otrogenero' => array('type' => 'string', 'null' => true, 'length' => 50),
		'preferencia_id' => array('type' => 'integer', 'null' => true),
		'etnia_id' => array('type' => 'integer', 'null' => true),
		'estudio_id' => array('type' => 'integer', 'null' => true),
		'otroestudio' => array('type' => 'string', 'null' => true, 'length' => 50),
		'profesion' => array('type' => 'string', 'null' => true, 'length' => 50),
		'poblacion' => array('type' => 'string', 'null' => true, 'length' => 50),
		'poblacion_id' => array('type' => 'integer', 'null' => true),
		'discapacidad' => array('type' => 'string', 'null' => true, 'length' => 100),
		'ubicacion_id' => array('type' => 'integer', 'null' => true),
		'vereda' => array('type' => 'string', 'null' => true, 'length' => 50),
		'comuna' => array('type' => 'string', 'null' => true, 'length' => 100),
		'corregimiento' => array('type' => 'string', 'null' => true, 'length' => 100),
		'direccion' => array('type' => 'string', 'null' => true, 'length' => 100),
		'celular' => array('type' => 'decimal', 'null' => true),
		'telefono' => array('type' => 'decimal', 'null' => true),
		'correo' => array('type' => 'string', 'null' => true, 'length' => 50),
		'ocupacion' => array('type' => 'string', 'null' => true, 'length' => 200),
		'cargo' => array('type' => 'string', 'null' => true, 'length' => 50),
		'tiempoexperiencia' => array('type' => 'integer', 'null' => true),
		'aseguradora_id' => array('type' => 'integer', 'null' => true),
		'regimen' => array('type' => 'string', 'null' => true, 'length' => 50),
		'perteneceorganizacion' => array('type' => 'string', 'null' => true, 'length' => 200),
		'organizacion' => array('type' => 'string', 'null' => true, 'length' => 100),
		'sociedad_id' => array('type' => 'integer', 'null' => true),
		'sector_id' => array('type' => 'integer', 'null' => true),
		'nombrecontacto' => array('type' => 'string', 'null' => true, 'length' => 200),
		'parentesco' => array('type' => 'string', 'null' => true, 'length' => 200),
		'teefonolacudiente' => array('type' => 'decimal', 'null' => true),
		'actividad_id' => array('type' => 'integer', 'null' => true),
		'fecharegistro' => array('type' => 'datetime', 'null' => true),
		'equipo' => array('type' => 'string', 'null' => true, 'length' => 100),
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
			'fecha' => '2016-08-24',
			'tipoidoc' => 'Lorem ip',
			'identificacion' => 'Lorem ipsum d',
			'nombres' => 'Lorem ipsum dolor sit amet',
			'apellidos' => 'Lorem ipsum dolor sit amet',
			'fechanac' => '2016-08-24',
			'edad' => 1,
			'grupo' => 'Lorem ipsum dolor sit amet',
			'genero_id' => 1,
			'otrogenero' => 'Lorem ipsum dolor sit amet',
			'preferencia_id' => 1,
			'etnia_id' => 1,
			'estudio_id' => 1,
			'otroestudio' => 'Lorem ipsum dolor sit amet',
			'profesion' => 'Lorem ipsum dolor sit amet',
			'poblacion' => 'Lorem ipsum dolor sit amet',
			'poblacion_id' => 1,
			'discapacidad' => 'Lorem ipsum dolor sit amet',
			'ubicacion_id' => 1,
			'vereda' => 'Lorem ipsum dolor sit amet',
			'comuna' => 'Lorem ipsum dolor sit amet',
			'corregimiento' => 'Lorem ipsum dolor sit amet',
			'direccion' => 'Lorem ipsum dolor sit amet',
			'celular' => '',
			'telefono' => '',
			'correo' => 'Lorem ipsum dolor sit amet',
			'ocupacion' => 'Lorem ipsum dolor sit amet',
			'cargo' => 'Lorem ipsum dolor sit amet',
			'tiempoexperiencia' => 1,
			'aseguradora_id' => 1,
			'regimen' => 'Lorem ipsum dolor sit amet',
			'perteneceorganizacion' => 'Lorem ipsum dolor sit amet',
			'organizacion' => 'Lorem ipsum dolor sit amet',
			'sociedad_id' => 1,
			'sector_id' => 1,
			'nombrecontacto' => 'Lorem ipsum dolor sit amet',
			'parentesco' => 'Lorem ipsum dolor sit amet',
			'teefonolacudiente' => '',
			'actividad_id' => 1,
			'fecharegistro' => '2016-08-24 16:28:56',
			'equipo' => 'Lorem ipsum dolor sit amet'
		),
	);

}
