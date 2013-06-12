<?php
App::uses('AppController', 'Controller');
/**
 * Catalogos Controller
 *
 * @property Catalogo $Catalogo
 */
class CatalogosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Catalogo->recursive = 0;
		$this->set('catalogos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Catalogo->exists($id)) {
			throw new NotFoundException(__('Invalid catalogo'));
		}
		$options = array('conditions' => array('Catalogo.' . $this->Catalogo->primaryKey => $id));
		$this->set('catalogo', $this->Catalogo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Catalogo->create();
			if ($this->Catalogo->save($this->request->data)) {
				$this->Session->setFlash(__('The catalogo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The catalogo could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Catalogo->exists($id)) {
			throw new NotFoundException(__('Invalid catalogo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Catalogo->save($this->request->data)) {
				$this->Session->setFlash(__('The catalogo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The catalogo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Catalogo.' . $this->Catalogo->primaryKey => $id));
			$this->request->data = $this->Catalogo->find('first', $options);
		}
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
		$this->Catalogo->id = $id;
		if (!$this->Catalogo->exists()) {
			throw new NotFoundException(__('Invalid catalogo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Catalogo->delete()) {
			$this->Session->setFlash(__('Catalogo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Catalogo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
