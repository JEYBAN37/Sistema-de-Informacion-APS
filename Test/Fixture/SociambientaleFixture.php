<?php
/**
 * SociambientaleFixture
 *
 */
class SociambientaleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'fecha' => array('type' => 'date', 'null' => false, 'default' => null),
		'responsable_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'ubicacion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'direccion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'vivienda_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'tenencia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'estrato' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'numerohabitantes' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'numerohogares' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'pared_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'estadoparedes' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'piso_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'techo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'estadotecho' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'dormitorios' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'hacinamiento' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'riesgoexterno_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'otroriesgo' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 50, 'unsigned' => false),
		'actividad' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'acceso_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'apellidosfamilia' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'transporte_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'riesgo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'otroriesgohogar' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'aguaservicio_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'aguatratamiento' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'aguasiministro' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'aguaalmacenamiento' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'diposicionexcreta_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'aguaresiduales_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'basura_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'reciclaje' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'higiene' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'lavadomanos' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'elementoshigiene' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'otroelementohigiene' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cepilladodientes' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'combustible_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'otrocombustible' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'mascotas_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'otramascota' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'desparasitamascotas' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'vacunamascotas' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cuidadomascotas' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'vector_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'enferemedadmenor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'otraenfermedadmenor' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'enferemedadmayor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'otraenferemedmayor' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'hienealimentos' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'aseococina' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'fecha' => '2023-08-08',
			'responsable_id' => 1,
			'ubicacion_id' => 1,
			'direccion' => 'Lorem ipsum dolor sit amet',
			'vivienda_id' => 1,
			'tenencia_id' => 1,
			'estrato' => 'Lorem ip',
			'numerohabitantes' => 'Lorem ip',
			'numerohogares' => 'Lorem ip',
			'pared_id' => 1,
			'estadoparedes' => 'Lorem ip',
			'piso_id' => 1,
			'techo_id' => 1,
			'estadotecho' => 'Lorem ip',
			'dormitorios' => 'Lorem ip',
			'hacinamiento' => 'Lorem ip',
			'riesgoexterno_id' => 1,
			'otroriesgo' => 1,
			'actividad' => 'Lorem ipsum dolor sit amet',
			'acceso_id' => 1,
			'apellidosfamilia' => 'Lorem ipsum dolor sit amet',
			'transporte_id' => 1,
			'riesgo_id' => 1,
			'otroriesgohogar' => 'Lorem ipsum dolor sit amet',
			'aguaservicio_id' => 1,
			'aguatratamiento' => 'Lorem ipsum dolor sit amet',
			'aguasiministro' => 'Lorem ipsum dolor sit amet',
			'aguaalmacenamiento' => 'Lorem ipsum dolor sit amet',
			'diposicionexcreta_id' => 1,
			'aguaresiduales_id' => 1,
			'basura_id' => 1,
			'reciclaje' => 'Lorem ipsum dolor sit amet',
			'higiene' => 'Lorem ipsum dolor sit amet',
			'lavadomanos' => 'Lorem ipsum dolor sit amet',
			'elementoshigiene' => 'Lorem ipsum dolor sit amet',
			'otroelementohigiene' => 'Lorem ipsum dolor sit amet',
			'cepilladodientes' => 'Lorem ipsum dolor sit amet',
			'combustible_id' => 1,
			'otrocombustible' => 'Lorem ipsum dolor sit amet',
			'mascotas_id' => 1,
			'otramascota' => 'Lorem ipsum dolor sit amet',
			'desparasitamascotas' => 'Lorem ipsum dolor ',
			'vacunamascotas' => 'Lorem ipsum dolor ',
			'cuidadomascotas' => 'Lorem ipsum dolor sit amet',
			'vector_id' => 1,
			'enferemedadmenor_id' => 1,
			'otraenfermedadmenor' => 'Lorem ipsum dolor sit amet',
			'enferemedadmayor_id' => 1,
			'otraenferemedmayor' => 'Lorem ipsum dolor sit amet',
			'hienealimentos' => 'Lorem ipsum dolor sit amet',
			'aseococina' => 'Lorem ipsum dolor sit amet'
		),
	);

}
