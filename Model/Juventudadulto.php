<?php
App::uses('AppModel', 'Model');
/**
 * Juventudadulto Model
 *
 * @property Familia $Familia
 * 
 * @property Intervecion $Intervecion
 */
class Juventudadulto extends AppModel
{

	// concatenar campos de nombre completo
	public function virtualFields() {
		return array(
			'nombre_completo' => "CONCAT(Juventudadulto.primernombre, ' ', Juventudadulto.segundonombre, ' ', Juventudadulto.primerapellido, ' ', Juventudadulto.segundoapellido)"
		);
	}

	/**
	 * Valida que el número de documento sea único, excepto para el registro actual en edición
	 */
	public function uniqueDocumento($check)
	{
		$numerodoc = array_values($check)[0];
		// Si es edición, no validar unicidad
		$currentId = null;
		if (!empty($this->data[$this->alias]['id'])) {
			$currentId = $this->data[$this->alias]['id'];
		} elseif (!empty($this->id)) {
			$currentId = $this->id;
		} elseif (!empty($check['id'])) {
			$currentId = $check['id'];
		}
		if (!empty($currentId)) {
			return true; // No validar unicidad en edit
		}
		$conditions = array(
			'Juventudadulto.numerodoc' => $numerodoc
		);

		// Buscar el id en todas las ubicaciones posibles
		$count = $this->find('count', array('conditions' => $conditions, 'recursive' => -1));
		return $count == 0;
	}
	public $actsAs = array(
		'Containable',
	);
	public $useTable = 'juventudadultos';
	public $validate = array(
		'familia_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
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
		'tipodocumento' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El tipo de documento no puede estar vacio',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'numerodoc' => array(
			'uniqueDocumento' => array(
				'rule' => array('uniqueDocumento'),
				'message' => 'La persona con este número de documento ya está asociada a un hogar 1',
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El numero de documento no puede estar vacio',
			),
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'El número de documento debe ser numérico',
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
				'message' => 'El nombre no puede estar vacion',
			),
			'validarLetras' => array(
				'rule' => array('custom', '/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/'),
				'message' => 'Este campo solo permite letras',
			),
		),
		'segundonombre' => array(
			'validarLetras' => array(
				'rule' => array('custom', '/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/'),
				'message' => 'Este campo solo permite letras',
			),
		),
		'fechanac' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'La fecha de nacimiento no puede estar vacía',
			),
		),

		'sexo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El sexo no puede estar vacío',
			),
		),
		'genero' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El género no puede estar vacío',
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
		'edad' => array(
			'numeric' => array(
				'rule' => 'decimal',
				'message' => 'La edad debe ser un valor numérico',
			),
			'range' => array(
				'rule' => array('range', 17.00, 120.00),
				'message' => 'La edad debe estar entre 18 y mas años',
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
		'discapacidad' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este campo no puede estar vacio'
			),
		),
		'peso' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El peso no puede estar vacío',
			),
		),
		'talla' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'La talla no puede estar vacía',
			),
			'numeric' => array(
				'rule' => 'numeric',
				'message' => 'La talla debe ser numérica',
			),
			'threeDigits' => array(
				'rule' => array('custom', '/^[0-9]{3}$/'),
				'message' => 'La talla debe tener exactamente 3 dígitos',
			),
		),
		'condicioncronica' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'La condición crónica no puede estar vacía',
			),
		),
		'esquemavacunacion' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El esquema de vacunación no puede estar vacío',
			),
		),
		'saludoral' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'valoracionmedica' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'La valoracion medica no puede estar vacía',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'saludalternativa' => array(
			'multiple' => array(
				'rule' => array('multiple', array('min' => 1)),
				'message' => 'El campo salud alternativa es obligatorio',
			),
		),
		'cursovida' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'riesgopsicosocial' => array(
			'multiple' => array(
				'rule' => array('multiple', array('min' => 1)),
				'message' => 'El campo riesgo psicosocial es obligatorio',
			),
		),
		'consumospa' => array(
			'multiple' => array(
				'rule' => array('multiple', array('min' => 0)),
				'allowEmpty' => true,
			),
		),
		'sopechamaltrato' => array(
			'multiple' => array(
				'rule' => array('multiple', array('min' => 1)),
				'message' => 'El campo de sospecha maltrato es obligatorio',
			),
		),
		'niveleducativo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El nivel educativo no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'canalizacionuno' => array(
			'multiple' => array(
				'rule' => array('multiple', array('min' => 1)),
				'message' => 'El campo de canalización es obligatorio',
			),
		),
		'antecedenteginecologico' => array(
			'multiple' => array(
				'rule' => array('multiple', array('min' => 0)),
				'allowEmpty' => true,
			),
		),
		'educacion' => array(
			'multiple' => array(
				'rule' => array('multiple', array('min' => 1)),
				'message' => 'El campo de educación es obligatorio',
			),
		),
		'estadocanalizacion' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El estado de canalización no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'estadoafiliacion' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El estado de afiliación no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'rol' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El rol no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'etnia' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'La etnia no puede estar vacía',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'grupopoblacional' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El grupo poblacional no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	/**
	 * Validation rules
	 *
	 * @var array
	 */


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
		'Canalizacion' => array(
			'className' => 'Canalizacion',
			'foreignKey' => 'canalizacion_id',
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

	public function traerIntervenciones($juventudadultoId)
	{
		debug($juventudadultoId);
		return 'asdasd';
	}

	public function beforeSave($options = array())
	{
		if (isset($this->data[$this->alias]['saludalternativa']) && is_array($this->data[$this->alias]['saludalternativa'])) {
			$this->data[$this->alias]['saludalternativa'] = implode(',', $this->data[$this->alias]['saludalternativa']);
		}
		if (isset($this->data[$this->alias]['riesgopsicosocial']) && is_array($this->data[$this->alias]['riesgopsicosocial'])) {
			$this->data[$this->alias]['riesgopsicosocial'] = implode(',', $this->data[$this->alias]['riesgopsicosocial']);
		}
		if (isset($this->data[$this->alias]['sopechamaltrato']) && is_array($this->data[$this->alias]['sopechamaltrato'])) {
			$this->data[$this->alias]['sopechamaltrato'] = implode(',', $this->data[$this->alias]['sopechamaltrato']);
		}
		if (isset($this->data[$this->alias]['canalizacionuno']) && is_array($this->data[$this->alias]['canalizacionuno'])) {
			$this->data[$this->alias]['canalizacionuno'] = implode(',', $this->data[$this->alias]['canalizacionuno']);
		}

		if (isset($this->data[$this->alias]['consumospa']) && is_array($this->data[$this->alias]['consumospa'])) {
			$this->data[$this->alias]['consumospa'] = implode(',', $this->data[$this->alias]['consumospa']);
		}

		if (isset($this->data[$this->alias]['educacion']) && is_array($this->data[$this->alias]['educacion'])) {
			$this->data[$this->alias]['educacion'] = implode(',', $this->data[$this->alias]['educacion']);
		}

		if (isset($this->data[$this->alias]['motivoinasistencia']) && is_array($this->data[$this->alias]['motivoinasistencia'])) {
			$this->data[$this->alias]['motivoinasistencia'] = implode(',', $this->data[$this->alias]['motivoinasistencia']);
		}

		if (isset($this->data[$this->alias]['antecedenteginecologico']) && is_array($this->data[$this->alias]['antecedenteginecologico'])) {
			$this->data[$this->alias]['antecedenteginecologico'] = implode(',', $this->data[$this->alias]['antecedenteginecologico']);
		}

		return true;
	}

	public function tranformData($data)
	{
		// Ejemplo: viene "2. Hombres,4. Niños y niñas"
		if (!empty($data['Juventudadulto']['saludalternativa'])) {
			$poblacionStr = $data['Juventudadulto']['saludalternativa'];
			// Extraer cada palabra/frase hasta la coma
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Juventudadulto']['saludalternativa'] = $tipos;
		}

		if(!empty($data['Juventudadulto']['antecedenteginecologico'])) {
			$poblacionStr = $data['Juventudadulto']['antecedenteginecologico'];
			// Extraer cada palabra/frase hasta la coma
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Juventudadulto']['antecedenteginecologico'] = $tipos;
		}
		if (!empty($data['Juventudadulto']['riesgopsicosocial'])) {
			$poblacionStr = $data['Juventudadulto']['riesgopsicosocial'];
			// Extraer cada palabra/frase hasta la coma
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Juventudadulto']['riesgopsicosocial'] = $tipos;
		}
		if (!empty($data['Juventudadulto']['sopechamaltrato'])) {
			$poblacionStr = $data['Juventudadulto']['sopechamaltrato'];
			// Extraer cada palabra/frase hasta la coma
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Juventudadulto']['sopechamaltrato'] = $tipos;
		}

		if (!empty($data['Juventudadulto']['canalizacionuno'])) {
			$poblacionStr = $data['Juventudadulto']['canalizacionuno'];
			// Extraer cada palabra/frase hasta la coma
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Juventudadulto']['canalizacionuno'] = $tipos;
		}

		if (!empty($data['Juventudadulto']['consumospa'])) {
			$poblacionStr = $data['Juventudadulto']['consumospa'];
			// Extraer cada palabra/frase hasta la coma
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Juventudadulto']['consumospa'] = $tipos;
		}

		if (!empty($data['Juventudadulto']['educacion'])) {
			$poblacionStr = $data['Juventudadulto']['educacion'];
			// Extraer cada palabra/frase hasta la coma
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Juventudadulto']['educacion'] = $tipos;
		}

		if (!empty($data['Juventudadulto']['motivoinasistencia'])) {
			$poblacionStr = $data['Juventudadulto']['motivoinasistencia'];
			// Extraer cada palabra/frase hasta la coma
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Juventudadulto']['motivoinasistencia'] = $tipos;
		}

		return $data;
	}
}
