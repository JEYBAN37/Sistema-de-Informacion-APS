<?php
App::uses('AppModel', 'Model');
/**
 * Intervecion Model
 *
 * @property Observacion $Observacion
 * @property Familia $Familia
 * @property Sociambiental $Sociambiental
 * @property Juventudadultos $Juventudadultos
 */
class Intervecion extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

	public $actsAs = array(
		'Containable',
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Observacion' => array(
			'className' => 'Observacion',
			'foreignKey' => 'observacion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Familia' => array(
			'className' => 'Familia',
			'foreignKey' => 'familia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Sociambiental' => array(
			'className' => 'Sociambiental',
			'foreignKey' => 'sociambiental_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Juventudadultos' => array(
			'className' => 'Juventudadultos',
			'foreignKey' => 'juventudadultos_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
