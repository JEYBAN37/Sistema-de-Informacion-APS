<?php
App::uses('AppController', 'Controller');
/**
 * Personas Controller
 *
 * @property Persona $Persona
 * @property PaginatorComponent $Paginator
 */
class PersonasController extends AppController
{
 public function beforeFilter()
	{
		parent::beforeFilter();
		// Permitir acceso a métodos JSON sin autenticación
		$this->Auth->allow('add','buscarPorDoc','buscarPersona');
	}


	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator');

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index()
	{
		$this->Persona->recursive = 0;
		$this->set('personas', $this->Paginator->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null)
	{
		if (!$this->Persona->exists($id)) {
			throw new NotFoundException(__('Invalid persona'));
		}
		$options = array('conditions' => array('Persona.' . $this->Persona->primaryKey => $id));
		$this->set('persona', $this->Persona->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */


	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null)
	{
		if (!$this->Persona->exists($id)) {
			throw new NotFoundException(__('Invalid persona'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash(__('The persona has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The persona could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Persona.' . $this->Persona->primaryKey => $id));
			$this->request->data = $this->Persona->find('first', $options);
		}
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null)
	{
		$this->Persona->id = $id;
		if (!$this->Persona->exists()) {
			throw new NotFoundException(__('Invalid persona'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Persona->delete()) {
			$this->Session->setFlash(__('The persona has been deleted.'));
		} else {
			$this->Session->setFlash(__('The persona could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


	public function add()
	{

		$this->loadModel('Familia');
		$this->loadModel('Canalizacion');
		$this->loadModel('Sociambiental');
		$this->loadModel('Juventudadulto');

		if ($this->request->is('post') || $this->request->is('put')) {

		// 1. Lógica de verificación de existencia (esto debe estar dentro del POST)
        $doc = $this->request->data['Persona']['numerodoc'];
        $personaExistente = $this->Persona->find('first', array(
						'conditions' => array('Persona.numerodoc' => $doc),
						'fields' => array('Persona.id')
					));
		
       
		//  Obtener la fecha de nacimiento del formulario
        $fechaNacimiento = $this->request->data['Persona']['fechanac'];
		//debug($this->request->data);
		#exit;

		if (!empty($this->request->data['Persona'])) {
            $dataSA = $this->request->data['Persona'];
				if ($personaExistente) {
					
								
					$idJuventuAdulto = $this->Juventudadulto->find('first', array(
						'conditions' => array('Juventudadulto.numerodoc' => $doc),
						'fields' => array('Juventudadulto.id')
					));
					
					//debug($idJuventuAdulto);
					//exit;
	
					$this->Juventudadulto->id = $idJuventuAdulto['Juventudadulto']['id'];
					$this->Sociambiental->id = $dataSA['sociambiental_id'];
					// Guardamos Sociambiental
					//debug($this->Sociambiental->id);
					//exit;
					$this->Juventudadulto->save($dataSA);
					$this->Sociambiental->save($dataSA);
				}
        }



        if (!empty($fechaNacimiento)) {
            // 2. Calcular la edad
            $fechaNac = new DateTime($fechaNacimiento);
            $hoy = new DateTime(); // Fecha actual (2026-04-10)
            $edadIntervalo = $hoy->diff($fechaNac);
            $edad = $edadIntervalo->y; // Extraer solo los años

            // 3. Asignar al array de datos para que se guarde en la columna 'edad'
            $this->request->data['Persona']['edad'] = $edad;
        }

		if (!$personaExistente) {
            // REGLA: Si el documento NO existe, se marca como 1
            $this->request->data['Persona']['caracterizacionaps'] = 'Caracterizar';
			
			

			
            
        } 

		//debug($this->request->data);
			if ($personaExistente) {
				// El usuario existe: Asignamos el ID para que CakePHP haga un UPDATE en lugar de INSERT
				$this->Persona->id = $personaExistente['Persona']['id'];

				$this->Session->setFlash(__('Usuario encontrado. Actualizando información existente.'), 'default', array('class' => 'success'));
			} else {
				// El usuario no existe: Preparamos para un nuevo registro
				$this->Persona->create();
				$this->Session->setFlash(__('Usuario no está en la tabla personas, por favor ingresar la información manualmente.'), 'default', array('class' => 'info'));
			}

			// 2. Guardar los datos (ya sea nuevo o actualización)
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash(__('Registro guardado con éxito. Edad calculada: ' . $edad . ' años.'));
				// llamar al modele juventud aduttosl

                $this->Session->setFlash('La Canalización se guradado con exito', 'flash_custom', array('class' => 'success', 'title' => 'El registro se ha completado correctamente'));
				return $this->redirect(array('action' => 'add'));
			} else {
				    //debug($this->Persona->validationErrors);
				$this->Session->setFlash('El registro no fue guardado o esta pendiente un campo del formulario', 'flash_custom', array('class' => 'error', 'title' => 'Error al guardar el registro'));
			}
		}
		
		$canalizaciones = $this->Canalizacion->find('list');
		$this->set(compact('canalizaciones'));
		
	}
		private function transformPersonaData($data) {
			// Transformar RIAS: de "Opción 1, Opción 2" a ["Opción 1", "Opción 2"]
			if (!empty($data['Persona']['rias'])) {
				$data['Persona']['rias'] = array_map('trim', explode(',', $data['Persona']['rias']));
			}

			// Transformar Oferta PIC
			if (!empty($data['Persona']['ofertapic'])) {
				$data['Persona']['ofertapic'] = array_map('trim', explode(',', $data['Persona']['ofertapic']));
			}

				// Transformar Canalizacionuno
			if (!empty($data['Persona']['canalizacionuno'])) {
				$data['Persona']['canalizacionuno'] = array_map('trim', explode(',', $data['Persona']['canalizacionuno']));
			}

			
			return $data;
    }

	// Acción AJAX o búsqueda rápida para cargar datos en los inputs sin recargar toda la página
	public function buscarPorDoc($doc = null)
	{
		
		$this->loadModel('Familia');
		$this->loadModel('Sociambiental');
		$this->autoRender = false;
		$persona = $this->Persona->find('first', array(
				'conditions' => array('Persona.numerodoc' => $doc),
				'fields' => array(
					'Persona.id',			
					'Persona.tipodocumento',
					'Persona.numerodoc',
					'Persona.primerapellido',
					'Persona.segundoapellido',
					'Persona.primernombre',
					'Persona.segundonombre',
					'Persona.fechanac',
					'Persona.sexo',		
					'Persona.grupopoblacional',
					'Persona.aseguradora',
					'Persona.telefono',
					'Persona.canalizacion_id',
					'Persona.fechanac',
					'Persona.edad',
					'Persona.sexo',
					'Persona.email',
					'Persona.barriovereda',
					'persona.direccion',
					'Persona.nombreAcudiente',
					'Persona.telefonoAcudiente',
					'Persona.urgencia',
					'Persona.caracterizacionaps',
					'Persona.detecciontemprana',
					'Persona.serviciosocial',
					'Persona.observacionpic',
					'Persona.rias',
					'Persona.ofertapic',
					'Persona.canalizacionuno',
					'Persona.responsablecanalizacion',
					'Persona.nombreResponsable',
					'Persona.contactoCelular',
					'Persona.estado',
					'Persona.familia_id',
					'Familia.id',
					'Familia.sociambiental_id',				
					'Familia.nombres',
					'Familia.celular',
					'Sociambiental.barriovereda',
					'Sociambiental.direccion',
					'Ubicacion.comuna',
					'Ubicacion.microterritorio',
					'Juventudadulto.numerodoc',
					'Juventudadulto.id',
					'Juventudadulto.aseguradora',
					'Juventudadulto.telefono',
					'Juventudadulto.email',
					'Juventudadulto.canalizacion_id',				
					'Juventudadulto.fechanac',
					'Juventudadulto.tipodocumento',
					'Juventudadulto.grupopoblacional',
				),
				'recursive' => -1,
				'distinct' => 'Persona.id',
				'joins' => array(
					array(
						'table' => 'familias',
						'alias' => 'Familia',
						'type' => 'LEFT',
						'conditions' => array('Persona.familia_id = Familia.id'),
					),
					array(
						'table' => 'sociambientals',
						'alias' => 'Sociambiental',
						'type' => 'LEFT',
						'conditions' => array('Familia.sociambiental_id = Sociambiental.id')
					),
					array(
						'table' => 'juventudadultos',
						'alias' => 'Juventudadulto',
						'type' => 'LEFT',
						'conditions' => array('Persona.numerodoc = Juventudadulto.numerodoc')
					),
					array(
						'table' => 'ubicaciones',
						'alias' => 'Ubicacion',
						'type' => 'LEFT',
						'conditions' => array('Sociambiental.ubicacion_id = Ubicacion.id')
					)
				)
			));

		if ($persona) {
			$persona = $this->transformPersonaData($persona);
			return json_encode(array('success' => true, 'data' => $persona));
		} else {
			return json_encode(array('success' => false));
		}

	
	}

	public function buscarPersona()
    {
        $this->autoRender = false;
        $this->response->type('json');

        $term = trim($this->request->query('q'));

        if (strlen($term) < 3) {
            echo json_encode([]);
            return;
        }

        $this->loadModel('Persona');

        $rows = $this->Persona->find('all', [
            'conditions' => [
                'OR' => [
                    'Persona.numerodoc LIKE' => '%' . $term . '%',
                ]
            ],
            'fields' => [
                'Persona.numerodoc',
                'Persona.primernombre',
                'Persona.primerapellido',
                'Persona.familia_id',
                'Persona.sociambiental_id'
            ],
            'limit' => 1,
            'recursive' => -1,
            'order' => [
                'Persona.numerodoc' => 'ASC'
            ]
        ]);

        $result = [];

        foreach ($rows as $row) {
            $p = $row['Persona'];

            $result[] = [
                'cedula' => $p['numerodoc'],
                'nombre' => $p['primernombre'] . ' ' . $p['primerapellido'],
                'familia_id' => $p['familia_id'],
                'sociambiental_id' => $p['sociambiental_id']
            ];
        }

        echo json_encode($result);
    }
	
}