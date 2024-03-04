<?php
/**
 * SisProcesosViewTestFixture
 *
 */
class SisProcesosViewTestFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'sesion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'poblaciones' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_spanish_ci', 'comment' => 'Almacena la poblaciones que participan en la actividad', 'charset' => 'latin1'),
		'grupo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 700, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'producto_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'N_producto' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'Dimensión' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'producto' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 500, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'tarea' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'caracteristicasesion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_spanish_ci', 'comment' => 'Dato que caracteriza la actividad (Taller, minga, encuentro, otro)', 'charset' => 'latin1'),
		'otrocual' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_spanish_ci', 'comment' => 'Almacena otro atributo de caracterización de la actividad diferentes a los criterios establecidos', 'charset' => 'latin1'),
		'objactividad' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_spanish_ci', 'comment' => 'Almacena el objetivo de la actividad', 'charset' => 'latin1'),
		'contobjetivo' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_spanish_ci', 'comment' => 'Almacena la contribución de la actividad con el objetivos', 'charset' => 'latin1'),
		'contpremisa' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_spanish_ci', 'comment' => 'Almacena la contribución de la actividad con las premisas', 'charset' => 'latin1'),
		'contperspectiva' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_spanish_ci', 'comment' => 'Almacena la contribución de la actividad con las perspectivas', 'charset' => 'latin1'),
		'contribucionenfoque' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_spanish_ci', 'comment' => 'Almacena la contribución de la actividad con los enfoques', 'charset' => 'latin1'),
		'fecha' => array('type' => 'date', 'null' => false, 'default' => null),
		'tema' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ubicacion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'comuna_actividad' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'barrio' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'zona' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'responsable_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'Campo que relaciona a un integrante del equipo CB'),
		'responsable' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'Planseseion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'id' => 1,
			'sesion_id' => 1,
			'poblaciones' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'grupo' => 'Lorem ipsum dolor sit amet',
			'producto_id' => 1,
			'N_producto' => 1,
			'Dimensión' => 'Lorem ipsum dolor ',
			'producto' => 'Lorem ipsum dolor sit amet',
			'tarea' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'caracteristicasesion' => 'Lorem ipsum dolor sit amet',
			'otrocual' => 'Lorem ipsum dolor sit amet',
			'objactividad' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'contobjetivo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'contpremisa' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'contperspectiva' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'contribucionenfoque' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'fecha' => '2019-10-08',
			'tema' => 'Lorem ipsum dolor sit amet',
			'ubicacion_id' => 1,
			'comuna_actividad' => 'Lorem ipsum dolor sit amet',
			'barrio' => 'Lorem ipsum dolor sit amet',
			'zona' => 'Lorem ipsum dolor sit amet',
			'responsable_id' => 1,
			'responsable' => 'Lorem ipsum dolor sit amet',
			'Planseseion_id' => 1
		),
	);

}
