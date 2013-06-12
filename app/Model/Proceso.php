<?php
App::uses('AppModel', 'Model');
/**
 * Proceso Model
 *
 * @property Presupuesto $Presupuesto
 */
class Proceso extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Presupuesto' => array(
			'className' => 'Presupuesto',
			'foreignKey' => 'proceso_id',
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

}
