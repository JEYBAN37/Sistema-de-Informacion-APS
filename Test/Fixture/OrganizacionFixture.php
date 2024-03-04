<?php
/**
 * OrganizacionFixture
 *
 */
class OrganizacionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'fecha' => array('type' => 'date', 'null' => false),
		'persona_id' => array('type' => 'integer', 'null' => false),
		'tipo' => array('type' => 'string', 'null' => false, 'length' => 100),
		'nombreorg' => array('type' => 'text', 'null' => false),
		'representante' => array('type' => 'string', 'null' => false, 'length' => 30),
		'ubicacion_id' => array('type' => 'integer', 'null' => false),
		'direccion' => array('type' => 'string', 'null' => false, 'length' => 30),
		'telefono' => array('type' => 'string', 'null' => false, 'length' => 20),
		'correo' => array('type' => 'string', 'null' => false, 'length' => 50),
		'web' => array('type' => 'string', 'null' => false, 'length' => 50),
		'redes' => array('type' => 'string', 'null' => false, 'length' => 200),
		'constitucion' => array('type' => 'string', 'null' => false, 'length' => 10),
		'nivel' => array('type' => 'text', 'null' => false),
		'tiempoconst' => array('type' => 'integer', 'null' => false),
		'actividad' => array('type' => 'string', 'null' => false, 'length' => 150),
		'numintegrantes' => array('type' => 'integer', 'null' => false),
		'numbeneficiarios' => array('type' => 'text', 'null' => false),
		'zonactividad' => array('type' => 'string', 'null' => false, 'length' => 300),
		'barrio' => array('type' => 'string', 'null' => false, 'length' => 100),
		'corregimiento' => array('type' => 'string', 'null' => false, 'length' => 100),
		'poblacion_id' => array('type' => 'text', 'null' => false),
		'numhombre' => array('type' => 'integer', 'null' => false),
		'nummujer' => array('type' => 'integer', 'null' => false),
		'nummenor' => array('type' => 'integer', 'null' => false),
		'sociedad_id' => array('type' => 'text', 'null' => false),
		'sector_id' => array('type' => 'integer', 'null' => false),
		'articulacion' => array('type' => 'string', 'null' => false, 'length' => 200),
		'proyecto_id' => array('type' => 'integer', 'null' => false),
		'registro' => array('type' => 'datetime', 'null' => false),
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
			'fecha' => '2016-06-21',
			'persona_id' => 1,
			'tipo' => 'Lorem ipsum dolor sit amet',
			'nombreorg' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'representante' => 'Lorem ipsum dolor sit amet',
			'ubicacion_id' => 1,
			'direccion' => 'Lorem ipsum dolor sit amet',
			'telefono' => 'Lorem ipsum dolor ',
			'correo' => 'Lorem ipsum dolor sit amet',
			'web' => 'Lorem ipsum dolor sit amet',
			'redes' => 'Lorem ipsum dolor sit amet',
			'constitucion' => 'Lorem ip',
			'nivel' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'tiempoconst' => 1,
			'actividad' => 'Lorem ipsum dolor sit amet',
			'numintegrantes' => 1,
			'numbeneficiarios' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'zonactividad' => 'Lorem ipsum dolor sit amet',
			'barrio' => 'Lorem ipsum dolor sit amet',
			'corregimiento' => 'Lorem ipsum dolor sit amet',
			'poblacion_id' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'numhombre' => 1,
			'nummujer' => 1,
			'nummenor' => 1,
			'sociedad_id' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'sector_id' => 1,
			'articulacion' => 'Lorem ipsum dolor sit amet',
			'proyecto_id' => 1,
			'registro' => '2016-06-21 20:03:26'
		),
	);

}
