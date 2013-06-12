<?php
App::uses('AppModel', 'Model');
/**
 * Partida Model
 *
 * @property Catalogo $Catalogo
 * @property Presupuesto $Presupuesto
 */
class Partida extends AppModel {

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
		'Catalogo' => array(
			'className' => 'Catalogo',
			'foreignKey' => 'catalogo_id',
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
	

}
