<?php
App::uses('AppModel', 'Model');
/**
 * Canalizacion Model
 *
 * @property Adolescencia $Adolescencia
 * @property Infantil $Infantil
 * @property Juventudadulto $Juventudadulto
 * @property Primerainfancia $Primerainfancia
 */
class Canalizacion extends AppModel
{

	public $virtualFields = array(
		'enlace' => 'CONCAT(Canalizacion.tipo," ",Canalizacion.nombre, " ", Canalizacion.enlaceuno)'
	);
	public $displayField = 'enlace';
	/**
	 * Use table
	 *
	 * @var mixed False or table name
	 */
	public $useTable = 'canalizaciones';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

	/**
	 * hasMany associations
	 *
	 * @var array
	 */
	public $hasMany = array(
		'Adolescencia' => array(
			'className' => 'Adolescencia',
			'foreignKey' => 'canalizacion_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Infantil' => array(
			'className' => 'Infantil',
			'foreignKey' => 'canalizacion_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Juventudadulto' => array(
			'className' => 'Juventudadulto',
			'foreignKey' => 'canalizacion_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Primerainfancia' => array(
			'className' => 'Primerainfancia',
			'foreignKey' => 'canalizacion_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
}
