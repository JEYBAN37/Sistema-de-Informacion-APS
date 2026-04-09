<?php
App::uses('AppModel', 'Model');
/**
 * Persona Model
 *
 * @property Sociambiental $Sociambiental
 * @property Familia $Familia
 * @property Responsable $Responsable
 * @property Adolescencia $Adolescencia
 * @property Gestante $Gestante
 * @property Infantil $Infantil
 * @property Primerainfancia $Primerainfancia
 */
class Persona extends AppModel {

public $actsAs = array(
		'Containable',
	);


/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'numerodoc' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		/*'Sociambiental' => array(
			'className' => 'Sociambiental',
			'foreignKey' => 'sociambiental_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),*/

		/*'Juventudadulto' => array(
			'className' => 'Juventudadulto',
			'foreignKey' => 'numerodoc',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),*/

		'Familia' => array(
			'className' => 'Familia',
			'foreignKey' => 'familia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Responsable' => array(
			'className' => 'Responsable',
			'foreignKey' => 'responsable_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		
	);

/**
 * hasMany associations
 *
 * @var array
 */


public function beforeSave($options = array())
	{
		
		if (isset($this->data[$this->alias]['ofertapic']) && is_array($this->data[$this->alias]['ofertapic'])) {
			$this->data[$this->alias]['ofertapic'] = implode(',', $this->data[$this->alias]['ofertapic']);
		}	
		if (isset($this->data[$this->alias]['rias']) && is_array($this->data[$this->alias]['rias'])) {
			$this->data[$this->alias]['rias'] = implode(',', $this->data[$this->alias]['rias']);
		}

		return true;
	}

	public $hasMany = array(
		'Adolescencia' => array(
			'className' => 'Adolescencia',
			'foreignKey' => 'persona_id',
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
		'Gestante' => array(
			'className' => 'Gestante',
			'foreignKey' => 'persona_id',
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
			'foreignKey' => 'persona_id',
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
			'foreignKey' => 'persona_id',
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