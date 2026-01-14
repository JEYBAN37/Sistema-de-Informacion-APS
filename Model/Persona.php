<?php
App::uses('AppModel', 'Model');
/**
 * Reporte Model
 *
 * @property Familia $Familia
 * @property Primerainfancia $Primerainfancia
 * @property Infantil $Infantil
 * @property Adolescencia $Adolescencia
 */
class Persona extends AppModel {
    public $useTable = 'personas';
    
    public function beforeSave($options = array())
    {
        // Convertir arrays a strings separados por comas
        if (isset($this->data[$this->alias]['canalizacionuno']) && is_array($this->data[$this->alias]['canalizacionuno'])) {
            $valoresValidos = array_filter($this->data[$this->alias]['canalizacionuno'], function($v) {
                return !empty($v);
            });
            $this->data[$this->alias]['canalizacionuno'] = !empty($valoresValidos) ? implode(',', $valoresValidos) : '';
        }
        
        return true;
    }
}
