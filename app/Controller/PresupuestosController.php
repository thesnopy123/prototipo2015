<?php
App::uses('AppController', 'Controller');
/**
 * Presupuestos Controller
 *
 * @property Presupuesto $Presupuesto
 */
class PresupuestosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Presupuesto->recursive = 0;
		$this->set('presupuestos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Presupuesto->exists($id)) {
			throw new NotFoundException(__('Invalid presupuesto'));
		}
		$options = array('conditions' => array('Presupuesto.' . $this->Presupuesto->primaryKey => $id));
		$this->set('presupuesto', $this->Presupuesto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Presupuesto->create();
			if ($this->Presupuesto->save($this->request->data)) {
				$this->Session->setFlash(__('The presupuesto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The presupuesto could not be saved. Please, try again.'));
			}
		}
		$departamentos = $this->Presupuesto->Departamento->find('list');
		$procesos = $this->Presupuesto->Proceso->find('list');
		$this->set(compact('departamentos', 'procesos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Presupuesto->exists($id)) {
			throw new NotFoundException(__('Invalid presupuesto'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Presupuesto->save($this->request->data)) {
				$this->Session->setFlash(__('The presupuesto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The presupuesto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Presupuesto.' . $this->Presupuesto->primaryKey => $id));
			$this->request->data = $this->Presupuesto->find('first', $options);
		}
		$departamentos = $this->Presupuesto->Departamento->find('list');
		$procesos = $this->Presupuesto->Proceso->find('list');
		$this->set(compact('departamentos', 'procesos'));
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
		$this->Presupuesto->id = $id;
		if (!$this->Presupuesto->exists()) {
			throw new NotFoundException(__('Invalid presupuesto'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Presupuesto->delete()) {
			$this->Session->setFlash(__('Presupuesto deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Presupuesto was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
