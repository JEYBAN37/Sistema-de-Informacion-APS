<?php
App::uses('AppModel', 'Model');
/**
 * Sociambiental Model
 *
 * @property Responsable $Responsable
 * @property Ubicacion $Ubicacion
 */
class Sociambiental extends AppModel
{
	public $useTable = 'sociambientals';

	public $virtualFields = array(
		'apellidosfamilia' => 'CONCAT(Sociambiental.apellidosfamilia)'
	);
	public $displayField = 'apellidosfamilia';

    public $actsAs = array(
        'Containable',
    );

	public function getFamiliaSocioambientalFilter($conditions = array())
	{
		// Definir las opciones para la consulta
		$options = array(
			'fields' => array(
				'Sociambiental.id',
				'Sociambiental.direccion',
				'Sociambiental.apellidosfamilia',
				'Sociambiental.fecha',
				'Sociambiental.numerohogares',
				'Sociambiental.numerohabitantes',
				'Ubicacion.id',
				'Ubicacion.microterritorio',
				'Responsable.nombres'

			),
			'conditions' => $conditions,
			'Familia' => array(
				'fields' => array('id', 'nombres') // Ajusta estos campos según los necesarios
			),
			'Ubicacion' => array(
				'fields' => array('id', 'microterritorio') // Ajusta estos campos según los necesarios
			),
			'Responsable' => array(
				'fields' => array('nombres') // Ajusta estos campos según los necesarios
			),
		);



		// Realizar la consulta y retornar los resultados
		return $this->find('all', $options);
	}


	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(

		'responsable_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'ubicacion_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'direccion' => array(
			'alphaNumeric' => array(
				'rule'     =>  array('notEmpty'),
				'message'  =>  'La dirección ya está asociada con una vivienda',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'vivienda' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Ingrese dirección de residencia',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'latitud' => array(
			'validFormat' => array(
				'rule' => array('custom', '/^\d\.\d{6}$/'),
				'message' => 'Ingrese una latitud válida 7 numeros con el formato n.nnnnnn',
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Ingrese latitud',
			),
		),
		'longitud' => array(
			'validFormat' => array(
				'rule' => array('custom', '/^-?\d{2}\.\d{6}$/'),
				'message' => 'Ingrese una longitud válida 8 numeros con el formato -nn.nnnnnn',
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Ingrese longitud',
			),
		),


		'estrato' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Solo valor numerico',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'numerohabitantes' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Solo valor numerico',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'numerohogares' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Solo valor numerico',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'pared' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'estadoparedes' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'piso' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'techo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'estadotecho' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'dormitorios' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'hacinamiento' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'riesgoexterno' => array(
			'notEmpty' => array(

				'rule' => array('notEmpty'),
				'rule' => array('multiple', array('min' => 1)),
				'message' => 'Por favor seleccione al menos una opción',
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'actividad' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'acceso' => array(
			'notEmpty' => array(
				
				'rule' => array('multiple', array('min' => 1)),
				'message' => 'Por favor seleccione al menos una opción',
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'apellidosfamilia' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'riesgo' => array(
			'notEmpty' => array(
				
				'rule' => array('multiple', array('min' => 1)),
				'message' => 'Por favor seleccione al menos una opción',
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'aguaservicio' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'diposicionexcretas' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'aguaresiduales' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'basura' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'reciclaje' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'mascotas' => array(
			'notEmpty' => array(
				
				'rule' => array('multiple', array('min' => 1)),
				'message' => 'Por favor seleccione al menos una opción',
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'numeroGatos' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'numeroPerros' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		/*'otramascota' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		'desparasitamascotas' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'vacunamascotas' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cuidadomascotas' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'vector' => array(
			'notEmpty' => array(
			
				'rule' => array('multiple', array('min' => 1)),
				'message' => 'Por favor seleccione al menos una opción',
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		/*'numMicroterritorio' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/

		/*'manzana' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/

		'fecha' => array(
			'notEmpty' => array(
				'rule' => array('date'),
				'message' => 'Por favor verifique campo',
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
		'Responsable' => array(
			'className' => 'Responsable',
			'foreignKey' => 'responsable_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Ubicacion' => array(
			'className' => 'Ubicacion',
			'foreignKey' => 'ubicacion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public function beforeSave($options = array())
	{
		if (isset($this->data[$this->alias]['acceso']) && is_array($this->data[$this->alias]['acceso'])) {
			$this->data[$this->alias]['acceso'] = implode(',', $this->data[$this->alias]['acceso']);
		}
		if (isset($this->data[$this->alias]['riesgoexterno']) && is_array($this->data[$this->alias]['riesgoexterno'])) {
			$this->data[$this->alias]['riesgoexterno'] = implode(',', $this->data[$this->alias]['riesgoexterno']);
		}
		if (isset($this->data[$this->alias]['riesgo']) && is_array($this->data[$this->alias]['riesgo'])) {
			$this->data[$this->alias]['riesgo'] = implode(',', $this->data[$this->alias]['riesgo']);
		}
		if (isset($this->data[$this->alias]['mascotas']) && is_array($this->data[$this->alias]['mascotas'])) {
			$this->data[$this->alias]['mascotas'] = implode(',', $this->data[$this->alias]['mascotas']);
		}
		if (isset($this->data[$this->alias]['vector']) && is_array($this->data[$this->alias]['vector'])) {
			$this->data[$this->alias]['vector'] = implode(',', $this->data[$this->alias]['vector']);
		}
		return true;
	}



	public $hasMany = array(
		'Familia' => array(
			'className' => 'Familia',
			'foreignKey' => 'sociambiental_id',
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


	public function tranformData($data)
	{
		// Ejemplo: viene "2. Hombres,4. Niños y niñas"
		if (!empty($data['Sociambiental']['acceso'])) {
			$poblacionStr = $data['Sociambiental']['acceso'];
			// Extraer cada palabra/frase hasta la coma
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Sociambiental']['acceso'] = $tipos;
		}
		return $data;
	}
}
