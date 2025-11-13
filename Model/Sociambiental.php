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
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Seleccione una ubicación',
				//'allowEmpty' => false,
				//'required' => true,
			),
		),
		'direccion' => array(
			'alphaNumeric' => array(
				'rule'     =>  array('notEmpty'),
				'message'  =>  'la dirección no puede estar vacía',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'vivienda' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'el tipo de vivienda no puede estar vacío',
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
				'rule' => array('notEmpty'),
				'message' => 'El estrato no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'numerohabitantes' => array(
			'numeric' => array(
				'rule' => array('notEmpty'),
				'message' => 'El número de habitantes no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'numerohogares' => array(
			'numeric' => array(
				'rule' => array('notEmpty'),
				'message' => 'El número de hogares no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'pared' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'La pared no puede estar vacía',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'estadoparedes' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El estado de las paredes no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'piso' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El piso no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'techo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El techo no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'estadotecho' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El estado del techo no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'dormitorios' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El número de dormitorios no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'hacinamiento' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El hacinamiento no puede estar vacío',
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
				'message' => 'El tipo de actividad no puede estar vacío',
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
				'message' => 'El apellido de la familia no puede estar vacío',
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
				'message' => 'El servicio de agua no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'diposicionexcretas' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'La disposición de excretas no puede estar vacía',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'aguaresiduales' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El servicio de aguas residuales no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'basura' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'La disposición de basura no puede estar vacía',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'reciclaje' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El reciclaje no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'mascotas' => array(
			'rule' => array('multiple', array('min' => 1)),
			//'message' => 'Your custom message here',
			//'allowEmpty' => false,
			//'required' => false,
			//'last' => false, // Stop validation after this rule
			//'on' => 'create', // Limit validation to 'create' or 'update' operations
		),
		'numeroGatos' => array(
			'multiple' => array(
				'rule' => array('multiple', array('min' => 0)),
				'allowEmpty' => true,
				//'required' => false,
				//'message' => 'Your custom message here',
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

		if (isset($this->data[$this->alias]['numeroGatos']) && is_array($this->data[$this->alias]['numeroGatos'])) {
			$this->data[$this->alias]['numeroGatos'] = implode(',', $this->data[$this->alias]['numeroGatos']);
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
		if (!empty($data['Sociambiental']['numeroGatos'])) {
			$poblacionStr = $data['Sociambiental']['numeroGatos'];
			// Extraer cada palabra/frase hasta la coma
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Sociambiental']['numeroGatos'] = $tipos;
		}
		if (!empty($data['Sociambiental']['vector'])) {
			$poblacionStr = $data['Sociambiental']['vector'];
			// Extraer cada palabra/frase hasta la coma
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Sociambiental']['vector'] = $tipos;
		}

		if (!empty($data['Sociambiental']['riesgoexterno'])) {
			$poblacionStr = $data['Sociambiental']['riesgoexterno'];
			// Extraer cada palabra/frase hasta la coma
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Sociambiental']['riesgoexterno'] = $tipos;
		}

		if (!empty($data['Sociambiental']['riesgo'])) {
			$poblacionStr = $data['Sociambiental']['riesgo'];
			// Extraer cada palabra/frase hasta la coma
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Sociambiental']['riesgo'] = $tipos;
		}

		return $data;
	}
}
