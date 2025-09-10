<?php
App::uses('AppModel', 'Model');
/**
 * Ubicacion Model
 *
 * @property Sociambiental $Sociambiental
 
 * @property Sociambientalscompletum $Sociambientalscompletum
 */
class Ubicacion extends AppModel
{

	public $virtualFields = array(
		'microterritorio' => 'CONCAT(Ubicacion.microterritorio)'
	);
	public $displayField = 'microterritorio';

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	/**
	 * Use table
	 *
	 * @var mixed False or table name
	 */
	public $useTable = 'ubicaciones';

	public function getUbicacionesConFiltro()
	{
		return $this->find('list', array(
			'conditions' => array('Ubicacion.microterritorio NOT IN' => array('Caicedonia', 'Panóramico I', 'Villa Nueva', 'Prados del Norte', 'Las Tablas', 'Quito López III', 'El Tejar', 'Corazón de Jesús')),
			'fields' => array('id', 'microterritorio'),
			'order' => ['microterritorio']
		));
	}

	public $validate = array(
		/*	'zona' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tipo1' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'comuna' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tipo2' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'barrio' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'estrato' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

	/**
	 * hasMany associations
	 *
	 * @var array
	 */
	public $hasMany = array(
		'Sociambiental' => array(
			'className' => 'Sociambiental',
			'foreignKey' => 'ubicacion_id',
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
		'Sociambientalscompletum' => array(
			'className' => 'Sociambientalscompletum',
			'foreignKey' => 'ubicacion_id',
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