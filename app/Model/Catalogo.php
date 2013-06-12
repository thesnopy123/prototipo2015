<?php
App::uses('AppModel', 'Model');
/**
 * Catalogo Model
 *
 * @property Partida $Partida
 */
class Catalogo extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'catalogo';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Partida' => array(
			'className' => 'Partida',
			'foreignKey' => 'catalogo_id',
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
