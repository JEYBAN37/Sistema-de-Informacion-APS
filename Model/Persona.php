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
}
