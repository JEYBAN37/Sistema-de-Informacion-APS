<?php
App::uses('AppModel', 'Model');
/**
 * Persona Model
 *
 * @property Primerainfancia $Primerainfancia
 */
class Persona extends AppModel
{

	public $virtualFields = array(
		'apellidosnombre' => 'CONCAT(Persona.numerodoc," ",Persona.primerapellido, " ", Persona.segundoapellido, " ",Persona.primernombre, " ",Persona.segundonombre, " ", "Edad ",Persona.edad, " ", "Sexo ",Persona.sexo)'
	);
	public $displayField = 'apellidosnombre';




	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
		/*	'primerapellido' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Este campo no puede estar vacío',
			),
			'validarLetras' => array(
				'rule' => array('custom', '/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/'),
				'message' => 'Este campo solo permite letras',
			),
		),
		'tipodocumento' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'numerodoc' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Solo valor numerico',
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'segundoapellido' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Este campo no puede estar vacío',
			),
			'validarLetras' => array(
				'rule' => array('custom', '/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/'),
				'message' => 'Este campo solo permite letras',
			),
		),

		'primernombre' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Este campo no puede estar vacío',
			),
			'validarLetras' => array(
				'rule' => array('custom', '/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/'),
				'message' => 'Este campo solo permite letras',
			),
		),
		'segundonombre' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Este campo no puede estar vacío',
			),
			'validarLetras' => array(
				'rule' => array('custom', '/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/'),
				'message' => 'Este campo solo permite letras',
			),
		),
		'fechanac' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'edad' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'sexo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'aseguradora' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'regimen' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'familia_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
	 * 
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

	);
	public $hasMany = array(
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
