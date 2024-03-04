<?php
/**
 * ProductosActividadFixture
 *
 */
class ProductosActividadFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'fecha' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'producto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'porcentaje_act' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'porcentaje' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'observacion' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'actividad_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'acta_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'anexo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 300, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'dirproducto' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 300, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'actividad1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'actividad2' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'actividad3' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'acta1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'acta2' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'acta3' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'enlaceuno' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 300, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'enlacedos' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 300, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'enlacetres' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 300, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'responsable_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'pro' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'dim' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'estado' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'observacionsms' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'referente_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'task' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 600, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'proceso' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
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
			'fecha' => 1559947431,
			'producto_id' => 1,
			'porcentaje_act' => 1,
			'porcentaje' => 1,
			'observacion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'actividad_id' => 1,
			'acta_id' => 1,
			'anexo' => 'Lorem ipsum dolor sit amet',
			'dirproducto' => 'Lorem ipsum dolor sit amet',
			'actividad1' => 'Lorem ipsum dolor sit amet',
			'actividad2' => 'Lorem ipsum dolor sit amet',
			'actividad3' => 'Lorem ipsum dolor sit amet',
			'acta1' => 'Lorem ipsum dolor sit amet',
			'acta2' => 'Lorem ipsum dolor sit amet',
			'acta3' => 'Lorem ipsum dolor sit amet',
			'enlaceuno' => 'Lorem ipsum dolor sit amet',
			'enlacedos' => 'Lorem ipsum dolor sit amet',
			'enlacetres' => 'Lorem ipsum dolor sit amet',
			'responsable_id' => 1,
			'pro' => 'Lorem ipsum dolor sit amet',
			'dim' => 'Lorem ipsum dolor sit amet',
			'estado' => 'Lorem ipsum dolor sit amet',
			'observacionsms' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'referente_id' => 1,
			'task' => 'Lorem ipsum dolor sit amet',
			'proceso' => 'Lorem ipsum dolor sit amet'
		),
	);

}
