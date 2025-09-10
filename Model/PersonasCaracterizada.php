<?php
App::uses('AppModel', 'Model');
/**
 * PersonasCaracterizada Model
 *
 * @property Familia $Familia
 * @property Sociambiental $Sociambiental
 */
class PersonasCaracterizada extends AppModel
{


	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(

		'NumeroDoc' => array(
			'rule' => 'notBlank',
			'message' => 'El número de documento no puede estar vacío.'
		),
	);

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
		'Sociambiental' => array(
			'className' => 'Sociambiental',
			'foreignKey' => 'sociambiental_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
