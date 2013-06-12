<?php
App::uses('AppController', 'Controller');
/**
 * Partidas Controller
 *
 * @property Partida $Partida
 */
class PartidasController extends AppController {

 function SUMAR($id = null) 
    { 
        if (!$id) 
        { 
            $this->Session->setFlash('Sorry, there was no property ID submitted.'); 
            $this->redirect(array('action'=>'index'), null, true); 
        } 
        Configure::write('debug',0); // Otherwise we cannot use this method while developing 

        $id = intval($id); 

      $property = $this->__view($id); // here the data is pulled from the database and set for the view 

        if (empty($property)) 
        { 
            $this->Session->setFlash('Sorry, there is no property with the submitted ID.'); 
            $this->redirect(array('action'=>'index'), null, true); 
        } 

        $this->layout = 'pdf'; //this will use the pdf.ctp layout 
        $this->render(); 
    } 

/**
 * index method
 *
 * @return void
 */
 
 function printpdf($id = null) 
    { 
        if (!$id) 
        { 
            $this->Session->setFlash('Sorry, there was no property ID submitted.'); 
            $this->redirect(array('action'=>'index'), null, true); 
        } 
        Configure::write('debug',0); // Otherwise we cannot use this method while developing 

        $id = intval($id); 

      $property = $this->__view($id); // here the data is pulled from the database and set for the view 

        if (empty($property)) 
        { 
            $this->Session->setFlash('Sorry, there is no property with the submitted ID.'); 
            $this->redirect(array('action'=>'index'), null, true); 
        } 

        $this->layout = 'pdf'; //this will use the pdf.ctp layout 
        $this->render(); 
    } 

 
	public function index() {
		$this->Partida->recursive = 0;
		$this->set('partidas', $this->paginate());
	}

public function index_user() {
		$this->Partida->recursive = 0;
		$this->set('partidas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Partida->recursive = 0;
		$this->set('partidas', $this->paginate());
		
		if (!$this->Partida->exists($id)) {
			throw new NotFoundException(__('Invalid partida'));
		}
		$options = array('conditions' => array('Partida.' . $this->Partida->primaryKey => $id));
		$this->set('partida', $this->Partida->find('first', $options));
	}
	
	
	
	

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Partida->create();
			if ($this->Partida->save($this->request->data)) {
				$this->Session->setFlash(__('The partida has been saved'));
				$this->redirect(array('action' => 'index_user'));
			} else {
				$this->Session->setFlash(__('The partida could not be saved. Please, try again.'));
			}
		}
		$catalogos = $this->Partida->Catalogo->find('list');
		$this->set(compact('catalogos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Partida->exists($id)) {
			throw new NotFoundException(__('PARTIDA INVALIDA'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Partida->save($this->request->data)) {
				$this->Session->setFlash(__('presupuesto asignado con exito'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The partida could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Partida.' . $this->Partida->primaryKey => $id));
			$this->request->data = $this->Partida->find('first', $options);
		}
		$catalogos = $this->Partida->Catalogo->find('list');
		$this->set(compact('catalogos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Partida->id = $id;
		if (!$this->Partida->exists()) {
			throw new NotFoundException(__('Invalid partida'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Partida->delete()) {
			$this->Session->setFlash(__('Partida ELIMINADA'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Partida NO BORRADA'));
		$this->redirect(array('action' => 'index'));
	}

}
