<?php
App::uses('AppModel', 'Model');
/**
 * Observacion Model
 *
 * @property Familia $Familia
 * @property Responsable $Responsable
 */
class Observacion extends AppModel
{

	/**
	 * Validation rules
	 *
	 * @var array
	 */


	public $useTable = 'observacions';

	public function beforeSave($options = array())
	{
		if (isset($this->data[$this->alias]['resultadoFamiliograma']) && is_array($this->data[$this->alias]['resultadoFamiliograma'])) {
			$this->data[$this->alias]['resultadoFamiliograma'] = implode(',', $this->data[$this->alias]['resultadoFamiliograma']);
		}

		if (isset($this->data[$this->alias]['menoresriegosalud']) && is_array($this->data[$this->alias]['menoresriegosalud'])) {
			$this->data[$this->alias]['menoresriegosalud'] = implode(',', $this->data[$this->alias]['menoresriegosalud']);
		}

		if (isset($this->data[$this->alias]['riesgovulnerabilidad']) && is_array($this->data[$this->alias]['riesgovulnerabilidad'])) {
			$this->data[$this->alias]['riesgovulnerabilidad'] = implode(',', $this->data[$this->alias]['riesgovulnerabilidad']);
		}

		if (isset($this->data[$this->alias]['fortalezas']) && is_array($this->data[$this->alias]['fortalezas'])) {
			$this->data[$this->alias]['fortalezas'] = implode(',', $this->data[$this->alias]['fortalezas']);
		}

		if (isset($this->data[$this->alias]['canalizacionuno']) && is_array($this->data[$this->alias]['canalizacionuno'])) {
			$this->data[$this->alias]['canalizacionuno'] = implode(',', $this->data[$this->alias]['canalizacionuno']);
		}

		return true;
	}

	public function tranformData($data)
	{
		// Solo procesar si el valor es string, si es array lo deja igual
		$campos = ['resultadoFamiliograma', 'menoresriegosalud', 'riesgovulnerabilidad', 'fortalezas', 'canalizacionuno'];
		foreach ($campos as $campo) {
			if (!empty($data['Observacion'][$campo])) {
				$valor = $data['Observacion'][$campo];
				if (is_string($valor)) {
					$tipos = array_map('trim', explode(',', $valor));
					$data['Observacion'][$campo] = $tipos;
				} else if (is_array($valor)) {
					$data['Observacion'][$campo] = $valor;
				}
			}
		}
		return $data;
	}

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
		'responsable_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Seleccione un campo de la lista',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'canalizacionuno' => array(
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
		/*'canalizaciondos' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/

		/*'canalizaciontres' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/

		'estado' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Por favor seleccione un estado',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'resultadoEcomapa' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El resultado del ecomapa no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'resultadoFamiliograma' => array(
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

		/*'objetivocortoplazo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'objetivolargoplazo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		'menoresriegosalud' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'rule' => array('multiple', array('min' => 1)),
				'message' => 'Por favor seleccione al menos una opción',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'mujerriesgosalud' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'personamayorriesgosalud' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'adolescenteriesgosalud' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'jovenriesgosalud' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),


		'riesgovulnerabilidad' => array(
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
		'tamizajeriesgo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'puntuacionfamilia' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Por favor genere una puntuación',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'valoracionfamilia' => array(
			//'notEmpty' => array(
			//	'rule' => array('notEmpty'),
			//'message' => 'Your custom message here',
			//'allowEmpty' => false,
			//'required' => false,
			//'last' => false, // Stop validation after this rule
			//'on' => 'create', // Limit validation to 'create' or 'update' operations
			//),
		),
		'fortalezas' => array(
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
		/*'problematicafamilia1' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		/*	'entornoafectado' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		/*	'actividaddesarrollar' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),/*
		/*'indicadorria' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		/*'recursoscomunitarios' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		/*'apoyofamiliar' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'apoyosocial' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		/*'asistenciafinanciera' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		/*'observacionesplancuidado' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		/*	'firmaplancuidado' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		/*	'disentimiento' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		/*'motivodisentimiento' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		/*'fecha' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fecha1' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fecha2' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fecha3' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/




		'familiograma' => array(
			'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'Por favor verifique campo, intente nuevamente',
				'on' => 'create'
			),
			'isUnderPhpSizeLimit' => array(
				'rule' => 'isUnderPhpSizeLimit',
				'message' => 'Archivo excede el límite de tamaño de archivo de subida'
			),
			'isValidMimeType' => array(

				'rule' => array('isValidExtension', array('pdf', 'jpg', 'png', 'jpeg')),
				'message' => 'El archivo debe ser de tipo pdf, jpg, png o jpeg'
			),
			'isBelowMaxSize' => array(
				'rule' => array('isBelowMaxSize', 8000000),
				'message' => 'El tamaño delarchivo es demasiado grande. Maximo 5mb'
			),
			/*'isValidExtension' => array(
				'rule' => array('isValidExtension', array('jpg', 'png'), false),
				'message' => 'La imagen no tiene la extension jpg o png'
			),
			'checkUniqueName' => array(
				'rule' => array('checkUniqueName'),
				'message' => 'Ya existe un archivo con el mismo nombre',
				'on' => 'update'
			),*/
		),

		'plancuidado' => array(
			'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'Por favor verifique campo, intente nuevamente',
				'on' => 'create'
			),
			'isUnderPhpSizeLimit' => array(
				'rule' => 'isUnderPhpSizeLimit',
				'message' => 'Archivo excede el límite de tamaño de archivo de subida'
			),
			'isValidMimeType' => array(

				'rule' => array('isValidExtension', array('pdf', 'jpg', 'png', 'jpeg')),
				'message' => 'El archivo debe ser de tipo pdf'
			),
			'isBelowMaxSize' => array(
				'rule' => array('isBelowMaxSize', 8000000),
				'message' => 'El tamaño delarchivo es demasiado grande. Maximo 5mb'
			),
			/*'isValidExtension' => array(
				'rule' => array('isValidExtension', array('jpg', 'png'), false),
				'message' => 'La imagen no tiene la extension jpg o png'
			),
			'checkUniqueName' => array(
				'rule' => array('checkUniqueName'),
				'message' => 'Ya existe un archivo con el mismo nombre',
				'on' => 'update'
			),*/
		),

	);
	public $actsAs = array(
		'Upload.Upload' => array(
			'familiograma' => array(
				'fields' => array(
					'dir' => 'dirfamiliograma'
				),
				'thumbnailMethod' => 'php',
				'deleteOnUpdate' => false,
				'deleteFolderOndelete' => true,
				'checkUniqueName' => array( // Aquí se aplica la regla de validación
					'rule' => array('checkUniqueName'),
					'message' => 'Existe un archivo almacenado con el mismo nombre',
					'on' => 'update'
				),
			),
			'plancuidado' => array(
				'fields' => array(
					'dir' => 'dirplancuidado'
				),
				'thumbnailMethod' => 'php',
				'deleteOnUpdate' => false,
				'deleteFolderOndelete' => true,
				'checkUniqueName' => array( // Aquí se aplica la regla de validación
					'rule' => array('checkUniqueName'),
					'message' => 'Existe un archivo almacenado con el mismo nombre',
					'on' => 'update'
				),
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
			'fields' => array('id', 'contrato', 'tipodoc', 'numero', 'nombres', 'fecha_nac', 'celular', 'correo', 'profesion', 'nodo', 'ebs', '(CONCAT(Responsable.nombres)) AS Responsable__encuestador'),
			'order' => ''
		)
	);
}

function checkUniqueName($data)
{
	$isUnique = $this->find('first', array('fields' => array('Observacion.familiograma'), 'conditions' => array('Observacion.familiograma' => $data['familiograma'])));
	if (!empty($isUnique)) {
		return false;
	} else {
		return true;
	}

	$isUnique = $this->find('first', array('fields' => array('Observacion.plancuidado'), 'conditions' => array('Observacion.plancuidado' => $data['plancuidado'])));
	if (!empty($isUnique)) {
		return false;
	} else {
		return true;
	}
}
