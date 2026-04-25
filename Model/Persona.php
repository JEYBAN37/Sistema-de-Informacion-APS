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
 * * @property Juventudadulto $Juventudadulto
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
				'message' => 'Requiere numero de documento',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			
		),
		'fechanac' => array(
						'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Este campo no puede estar vacío',
			),
		),
		'primerapellido' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Este campo no puede estar vacío',
			),
			'validarLetras' => array(
				'rule' => array('custom', '/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/'),
				'message' => 'Este campo solo permite letras',
			),
		),

		/*'estado' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Este campo no puede estar vacío',
			),
		),*/
		'primernombre' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'El nombre no puede estar vacio',
			),
			'validarLetras' => array(
				'rule' => array('custom', '/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/'),
				'message' => 'Este campo solo permite letras',
			),
		),
		/*'ofertapic' => array(
			'multiple' => array(
				'rule' => array('multiple', array('min' => 0)),
				'message' => 'El campo de sospecha maltrato es obligatorio',
			),
		),
		'rias' => array(
			'multiple' => array(
				'rule' => array('multiple', array('min' => 0)),
				'message' => 'El campo de sospecha maltrato es obligatorio',
			),
		),*/
		'canalizacionuno' => array(
			'multiple' => array(
				'rule' => array('multiple', array('min' => 0)),
				'message' => 'El campo de sospecha maltrato es obligatorio',
			),
		),
		'sexo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El sexo no puede estar vacío',
			),
		),
		'aseguradora' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'La aseguradora no puede estar vacía',
			),
		),
		'regimen' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El régimen no puede estar vacío',
			),
		),
		
		'canalizacion_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'La IPS de canalizacion no debe estar vacío',
			),
		),
		/*'direccion' => array(
			'alphaNumeric' => array(
				'rule'     =>  array('notEmpty'),
				'message'  =>  'La dirección no puede estar vacía',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		/*'barriovereda' => array(
			'alphaNumeric' => array(
				'rule'     =>  array('notEmpty'),
				'message'  =>  'No se registra el barrio o corregimiento',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		

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
			if (isset($this->data[$this->alias]['canalizacionuno']) && is_array($this->data[$this->alias]['canalizacionuno'])) {
			$this->data[$this->alias]['canalizacionuno'] = implode(',', $this->data[$this->alias]['canalizacionuno']);
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
		),
		/*'Juventudadulto' => array(
			'className' => 'Juventudadulto',
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
		)*/
	);

	

}