<?php
App::uses('AppModel', 'Model');
/**
 * Presupuesto Model
 *
 * @property Departamento $Departamento
 * @property Proceso $Proceso
 * @property Partida $Partida
 */
class Presupuesto extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Departamento' => array(
			'className' => 'Departamento',
			'foreignKey' => 'departamento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Proceso' => array(
			'className' => 'Proceso',
			'foreignKey' => 'proceso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
		
		
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Partida' => array(
			'className' => 'Partida',
			'foreignKey' => 'partida_id',
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
