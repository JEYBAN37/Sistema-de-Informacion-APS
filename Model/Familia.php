<?php
App::uses('AppModel', 'Model');
/**
 * Familia Model
 *
 * @property Sociambiental $Sociambiental
 * @property Adolescencia $Adolescencia
 * @property Gestante $Gestante
 * @property Infantil $Infantil
 * @property Juventudadulto $Juventudadulto
 * @property Observacion $Observacion
 * @property Persona $Persona
 * @property Primerainfancia $Primerainfancia
 */
class Familia extends AppModel

{

	public $actsAs = array(
		'Containable',
	);

	public function getFamiliaSocioambientalFiltered($encuestadorId = null, $ubicacionId = null)
	{
		$query = $this->find('all')
			->contain(['Sociambiental']);

		if ($encuestadorId !== null) {
			$query->where(['Sociambiental.responsable_id' => $encuestadorId]);
		}

		if ($ubicacionId !== null) {
			$query->where(['Sociambiental.ubicacion_id' => $ubicacionId]);
		}

		return $query;
	}


	public function getEstadisticasResponsable($responsableId)
	{
		// Consulta principal: solo los conteos
		$sql = "SELECT 
        (SELECT COUNT(*) 
         FROM sociambientals sa
         WHERE sa.responsable_id = :responsable_id) AS total_sociambiental,

        (SELECT COUNT(*) 
         FROM familias f
         INNER JOIN sociambientals sa 
             ON f.sociambiental_id = sa.id
         WHERE sa.responsable_id = :responsable_id) AS total_familias,

        (SELECT COUNT(*) 
         FROM juventudadultos j
         INNER JOIN familias f 
             ON j.familia_id = f.id
         INNER JOIN sociambientals sa 
             ON f.sociambiental_id = sa.id
         WHERE sa.responsable_id = :responsable_id) AS total_personas,

        (SELECT COUNT(*) 
         FROM visitasnegadas v
         WHERE v.responsable_id = :responsable_id) AS total_novedades";

		// Ejecutar la consulta principal
		$result = $this->query($sql, array('responsable_id' => $responsableId));

		// Consulta aparte para territorios
		$territoriosSql = "SELECT DISTINCT sa.ubicacion_id, u.microterritorio
        FROM sociambientals sa
        INNER JOIN ubicaciones u ON sa.ubicacion_id = u.id
        WHERE sa.responsable_id = :responsable_id";
		$territoriosResult = $this->query($territoriosSql, array('responsable_id' => $responsableId));

		// Procesar territorios en un array simple
		$territorios = array();
		foreach ($territoriosResult as $row) {
			$territorios[] = array(
				'ubicacion_id' => $row['sa']['ubicacion_id'],
				'microterritorio' => $row['u']['microterritorio']
			);
		}

		// Retornar resultados
		if (!empty($result) && isset($result[0][0])) {
			return array(
				'total_sociambiental' => (int)$result[0][0]['total_sociambiental'],
				'total_familias' => (int)$result[0][0]['total_familias'],
				'total_personas' => (int)$result[0][0]['total_personas'],
				'territorios' => $territorios,
				'total_novedades' => (int)$result[0][0]['total_novedades']
			);
		}

		return array(
			'total_sociambiental' => 0,
			'total_familias' => 0,
			'total_personas' => 0,
			'territorios' => array(),
			'total_novedades' => 0
		);
	}

	public function getFamiliaDatos($contain)
	{
		try {
			$result = $this->find('all', [
				'contain' => $contain
			]);
			return $result;
		} catch (\Exception $e) {
			// Manejar la excepción y retornar un valor indicativo de error (puedes ajustarlo según tus necesidades)
			echo 'Error: ' . $e->getMessage();
			return [];
		}
	}

	public function getFamiliaSocioambientalFilter($conditions = array())
	{
		$options = array(
			'fields' => array(
				'Familia.id',
				'Familia.nombres',
				'Familia.apellidos',
				'Sociambiental.id',
				'Sociambiental.direccion',
				'Sociambiental.apellidosfamilia',
				'Sociambiental.fecha',
				'Sociambiental.responsable_id'
			),
			'conditions' => $conditions,
			'Sociambiental' => array(
				'fields' => array(
					'id',
					'direccion',
					'apellidosfamilia',
					'fecha',
					'responsable_id'
				)
			),
		);
		return $this->find('all', $options);
	}



	public function getFamiliaResponsable()
	{
		$contain = [
			'Sociambiental' => [
				'Responsable' => ['fields' => ['nombres']]
			]
		];
		return $this->getFamiliaDatos($contain);
	}

	public function getSelectiveData()
	{
		$fields = ['id', 'nombres', 'apellidos', 'rol', 'celular', 'hogar'];
		return $this->getFamiliaDatos($fields);
	}


	public function getFamiliaSocioambiental()
	{
		$contain = [
			'Sociambiental' => [
				'fields' => ['id', 'direccion', 'apellidosfamilia', 'fecha']
				// Puedes agregar relaciones adicionales si es necesario
			]
		];

		return $this->getFamiliaDatos($contain);
	}



	public function getUbicaciones()
	{
		$contain = [
			'Sociambiental' => [
				'Ubicacion' => ['fields' => ['microterritorio']]
			]
		];
		return $this->getFamiliaDatos($contain);
	}


	public $virtualFields = array(
		'apellidosfamilia' => 'CONCAT(Familia.sociambiental_id, " ", Familia.hogar, " ", Familia.nombres, " ", Familia.apellidos)'
	);
	public $displayField = 'apellidosfamilia';


	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
		'sociambiental_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tipofamilia' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El tipo de familia no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nombres' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El nombre no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'apellidos' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El apellido no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tipodocumento' => array(),
		'numerodocumento' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El número de documento no puede estar vacío',
			),
			'numeric' => array(
				'rule' => array('isUnique'),
				'message' => 'La persona con este número de documento ya está asociada a un hogar',
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'rol' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Quien atiende no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		/*'correo' => array(
			'email' => array(
				'rule' => array('email', false),
				'message' => 'diligencie correctamente ejemplo@correo.xxx',
				//'rule'     =>  'isUnique' , 
				//'message'  =>  'el correo ya esta registrado.' ,
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		), */
		'celular' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => '	Numero de celular no obligatorio',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'numeropersonas' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Numero de personas no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'vivienda' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'La vivienda no puede estar vacía',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'tenencia' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'La tenencia no puede estar vacía',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'combustible' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'rule' => array('multiple', array('min' => 1)),
				'message' => 'El combustible no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		/*'otrocombustible' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		'cursovidafamilia' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El curso de vida no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		/*'lgtbi' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		'estilodevidapredominante' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El estilo de vida predominante no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'poblacionvulnerable' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'rule' => array('multiple', array('min' => 1)),
				'message' => 'La población vulnerable no puede estar vacía',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'alimentos' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'rule' => array('multiple', array('min' => 1)),
				'message' => 'Los alimentos no pueden estar vacíos',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'hogar' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El hogar no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'antecedenteenfermedad' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'rule' => array('multiple', array('min' => 1)),
				'message' => 'El antecedente de enfermedad no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		/*'antecedenteenfermedad1' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'antecedenteenfermedad2' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		'riesgopsicosocial' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'rule' => array('multiple', array('min' => 1)),
				'message' => 'El riesgo psicosocial no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		/*'riesgopsicosocial1' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	riesgopsicosocial2' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		'programasocial' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El programa social no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		/*'programasocial1' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'programasocial2' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		'cepilladodientes' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El cepillado de dientes no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'elementoshigiene' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Los elementos de higiene no pueden estar vacíos',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'lavadomanos' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El lavado de manos no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'aseococina' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El aseo de la cocina no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'higienealimentos' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'higiene' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'La higiene no puede estar vacía',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'saludalternativa' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'La salud alternativa no puede estar vacía',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cuidadopermanente' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El cuidado permanente no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'enfermedadtransmible' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'rule' => array('multiple', array('min' => 1)),
				'message' => 'El antecedente de enfermedad no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		/*'enfermedadtransmible1' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		'tiemporesidencia' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El tiempo de residencia no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'permanenciaresidencia' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'La permanencia en la residencia no puede estar vacía',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'resguardo' => array(),
		'poblacionetnica' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
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
		'Sociambiental' => array(
			'className' => 'Sociambiental',
			'foreignKey' => 'sociambiental_id'
		),
		'Responsable' => array(
			'className' => 'Responsable',
			'foreignKey' => false,
			'conditions' => array('Responsable.id = Sociambiental.responsable_id')
		),
		'Ubicacion' => array(
			'className' => 'Ubicacion',
			'foreignKey' => false,
			'conditions' => array('Ubicacion.id = Sociambiental.ubicacion_id')
		)
	);

	/**
	 * hasMany associations
	 *
	 * @var array
	 */
	public $hasMany = array(
		'Adolescencia' => array(
			'className' => 'Adolescencia',
			'foreignKey' => 'familia_id',
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
			'foreignKey' => 'familia_id',
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
			'foreignKey' => 'familia_id',
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
			'foreignKey' => 'familia_id',
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
		'Observacion' => array(
			'className' => 'Observacion',
			'foreignKey' => 'familia_id',
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
			'foreignKey' => 'familia_id',
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


	public function beforeSave($options = array())
	{
		if (isset($this->data[$this->alias]['combustible']) && is_array($this->data[$this->alias]['combustible'])) {
			$this->data[$this->alias]['combustible'] = implode(',', $this->data[$this->alias]['combustible']);
		}
		if (isset($this->data[$this->alias]['poblacionvulnerable']) && is_array($this->data[$this->alias]['poblacionvulnerable'])) {
			$this->data[$this->alias]['poblacionvulnerable'] = implode(',', $this->data[$this->alias]['poblacionvulnerable']);
		}
		if (isset($this->data[$this->alias]['antecedenteenfermedad']) && is_array($this->data[$this->alias]['antecedenteenfermedad'])) {
			$this->data[$this->alias]['antecedenteenfermedad'] = implode(',', $this->data[$this->alias]['antecedenteenfermedad']);
		}
		if (isset($this->data[$this->alias]['riesgopsicosocial']) && is_array($this->data[$this->alias]['riesgopsicosocial'])) {
			$this->data[$this->alias]['riesgopsicosocial'] = implode(',', $this->data[$this->alias]['riesgopsicosocial']);
		}
		if (isset($this->data[$this->alias]['alimentos']) && is_array($this->data[$this->alias]['alimentos'])) {
			$this->data[$this->alias]['alimentos'] = implode(',', $this->data[$this->alias]['alimentos']);
		}
		if (isset($this->data[$this->alias]['enfermedadtransmible']) && is_array($this->data[$this->alias]['enfermedadtransmible'])) {
			$this->data[$this->alias]['enfermedadtransmible'] = implode(',', $this->data[$this->alias]['enfermedadtransmible']);
		}

		return true;
	}


	public function tranformData($data)
	{
		// Ejemplo: viene "2. Hombres,4. Niños y niñas"
		if (!empty($data['Familia']['combustible'])) {
			$poblacionStr = $data['Familia']['combustible'];
			// Extraer cada palabra/frase hasta la coma
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Familia']['combustible'] = $tipos;
		}
		if (!empty($data['Familia']['poblacionvulnerable'])) {
			$poblacionStr = $data['Familia']['poblacionvulnerable'];
			// Extraer cada palabra/frase hasta la coma
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Familia']['poblacionvulnerable'] = $tipos;
		}
		if (!empty($data['Familia']['antecedenteenfermedad'])) {
			$poblacionStr = $data['Familia']['antecedenteenfermedad'];
			// Extraer cada palabra/frase hasta la coma
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Familia']['antecedenteenfermedad'] = $tipos;
		}

		if (!empty($data['Familia']['riesgopsicosocial'])) {
			$poblacionStr = $data['Familia']['riesgopsicosocial'];
			// Extraer cada palabra/frase hasta la coma
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Familia']['riesgopsicosocial'] = $tipos;
		}

		if (!empty($data['Familia']['alimentos'])) {
			$poblacionStr = $data['Familia']['alimentos'];
			// Extraer cada palabra/frase hasta la coma
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Familia']['alimentos'] = $tipos;
		}

		if (!empty($data['Familia']['enfermedadtransmible'])) {
			$poblacionStr = $data['Familia']['enfermedadtransmible'];
			// Extraer cada palabra/frase hasta la coma
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Familia']['enfermedadtransmible'] = $tipos;
		}

		return $data;
	}
}
