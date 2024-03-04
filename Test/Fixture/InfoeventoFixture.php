<?php
/**
 * InfoeventoFixture
 *
 */
class InfoeventoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'Identificador'),
		'fecha' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => 'Fecha de realización de la actividad'),
		'tema' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 300, 'collate' => 'latin1_spanish_ci', 'comment' => 'Nombre de la temática desarrollada', 'charset' => 'latin1'),
		'ubicacion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => 'BD_ Barrio_Comuna para asociación'),
		'vereda' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_spanish_ci', 'comment' => 'Datos de vereda donde se realiza la actividad', 'charset' => 'latin1'),
		'lugar' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'poblaciones' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_spanish_ci', 'comment' => 'Almacena la poblaciones que participan en la actividad', 'charset' => 'latin1'),
		'producto1' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'producto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nombregrupo' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_spanish_ci', 'comment' => 'Refiere al nombre de un grupo especifico que participa en la actividad(ejemplo: Proinco, mesa victimas, etc )', 'charset' => 'latin1'),
		'caracteristicasesion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_spanish_ci', 'comment' => 'Dato que caracteriza la actividad (Taller, minga, encuentro, otro)', 'charset' => 'latin1'),
		'anexo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'actividad_dir' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'plan' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'responsable_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => 'Campo que relaciona a un integrante del equipo CB'),
		'fecharegistro' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'actualizado' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_spanish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'fecha' => '2019-07-04',
			'tema' => 'Lorem ipsum dolor sit amet',
			'ubicacion_id' => 1,
			'vereda' => 'Lorem ipsum dolor sit amet',
			'lugar' => 'Lorem ipsum dolor sit amet',
			'poblaciones' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'producto1' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'producto_id' => 1,
			'nombregrupo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'caracteristicasesion' => 'Lorem ipsum dolor sit amet',
			'anexo' => 'Lorem ipsum dolor sit amet',
			'actividad_dir' => 'Lorem ipsum dolor sit amet',
			'plan' => 'Lorem ipsum dolor sit amet',
			'responsable_id' => 1,
			'fecharegistro' => 1562256094,
			'actualizado' => 1562256094
		),
	);

}
