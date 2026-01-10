<?php
App::uses('AppController', 'Controller');
/**
 * Juventudadultos Controller
 *
 * @property Persona $Persona
 */
class PersonasController extends AppController
{

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');

    public function beforeFilter()
    {
        parent::beforeFilter();
        // Permitir acceso a métodos JSON sin autenticación
        $this->Auth->allow('buscarPersona');
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
