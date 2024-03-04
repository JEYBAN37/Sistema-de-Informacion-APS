<?php
/**
 * ProductoFixture
 *
 */
class ProductoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'numproductos' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'lineas' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'dimensiones' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'nombredim' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'costodim' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'linormativas' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'resultado' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'activity' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'vidacursos' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'entorno' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'tecnologias' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'porcproducto' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'tarea' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'porctareas' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'clasobjetivos' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'evidencia' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'actividad_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'acta_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'producto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'responsable_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fecha_registro' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'porcentajeavance' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'observacionpic' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'observacionsms' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'estado' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'referente_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'enlace' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'enlacedos' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'anexo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'dirproduc' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'fecha_actualizado' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'numproductos' => 1,
			'lineas' => 'Lorem ipsum dolor sit amet',
			'dimensiones' => 'Lorem ipsum dolor sit amet',
			'nombredim' => 'Lorem ipsum dolor ',
			'costodim' => 'Lorem ipsum dolor sit amet',
			'linormativas' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'resultado' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'activity' => 'Lorem ipsum dolor sit amet',
			'vidacursos' => 'Lorem ipsum dolor sit amet',
			'entorno' => 'Lorem ipsum dolor sit amet',
			'tecnologias' => 'Lorem ipsum dolor sit amet',
			'porcproducto' => 'Lorem ipsum dolor sit amet',
			'tarea' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'porctareas' => 'Lorem ipsum dolor sit amet',
			'clasobjetivos' => 'Lorem ipsum dolor sit amet',
			'evidencia' => 'Lorem ipsum dolor sit amet',
			'actividad_id' => 1,
			'acta_id' => 1,
			'producto_id' => 1,
			'responsable_id' => 1,
			'fecha_registro' => 1560183904,
			'porcentajeavance' => 1,
			'observacionpic' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'observacionsms' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'estado' => 'Lorem ipsum dolor sit amet',
			'referente_id' => 1,
			'enlace' => 'Lorem ipsum dolor sit amet',
			'enlacedos' => 'Lorem ipsum dolor sit amet',
			'anexo' => 'Lorem ipsum dolor sit amet',
			'dirproduc' => 'Lorem ipsum dolor sit amet',
			'fecha_actualizado' => 1560183904
		),
	);

}
