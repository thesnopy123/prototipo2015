<?php
App::uses('AppController', 'Controller');
/**
 * Procesos Controller
 *
 * @property Proceso $Proceso
 */
class ProcesosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Proceso->recursive = 0;
		$this->set('procesos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Proceso->exists($id)) {
			throw new NotFoundException(__('Invalid proceso'));
		}
		$options = array('conditions' => array('Proceso.' . $this->Proceso->primaryKey => $id));
		$this->set('proceso', $this->Proceso->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Proceso->create();
			if ($this->Proceso->save($this->request->data)) {
				$this->Session->setFlash(__('The proceso has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proceso could not be saved. Please, try again.'));
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
		if (!$this->Proceso->exists($id)) {
			throw new NotFoundException(__('Invalid proceso'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Proceso->save($this->request->data)) {
				$this->Session->setFlash(__('The proceso has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proceso could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Proceso.' . $this->Proceso->primaryKey => $id));
			$this->request->data = $this->Proceso->find('first', $options);
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
		$this->Proceso->id = $id;
		if (!$this->Proceso->exists()) {
			throw new NotFoundException(__('Invalid proceso'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Proceso->delete()) {
			$this->Session->setFlash(__('Proceso deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Proceso was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
