<?php
App::uses('AppModel', 'Model');
/**
 * Reporte Model
 *
 * @property Familia $Familia
 * @property Primerainfancia $Primerainfancia
 * @property Infantil $Infantil
 * @property Adolescencia $Adolescencia
 */
class Reporte extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Familia' => array(
			'className' => 'Familia',
			'foreignKey' => 'familia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Primerainfancia' => array(
			'className' => 'Primerainfancia',
			'foreignKey' => 'primerainfancia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Infantil' => array(
			'className' => 'Infantil',
			'foreignKey' => 'infantil_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Adolescencia' => array(
			'className' => 'Adolescencia',
			'foreignKey' => 'adolescencia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
