<?php
App::uses('AppModel', 'Model');

class Parametro extends AppModel {

    // Nombre exacto de la tabla
    public $useTable = 'parametros';

    // Clave primaria (IMPORTANTE)
    public $primaryKey = 'id';

    // Conexión (si no usas la default)
    public $useDbConfig = 'default';

}
