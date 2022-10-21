<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Chronos\Chronos;

class CarreraController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Paginator');
        $this->loadComponent('Flash'); // Include the FlashComponent
    }

    public function index()
    {
        $carrera = $this->Paginator->paginate($this->Carrera->find());
        $this->set(compact('carrera'));
    }

    /**
     * View method
     *
     * @param string|null $id Carrera id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $carrera = $this->Carrera->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('carrera'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $carrera = $this->Carrera->newEmptyEntity();
        if ($this->request->is('post')) {
            $carrera = $this->Carrera->patchEntity($carrera, $this->request->getData());

            if ($this->Carrera->save($carrera)) {
                $this->Flash->success(__('Se guardo correctamente.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocurrió un error mientras se intentaba guardar en la base de datos. Por favor, intente de nuevamente.'));
        }
        $this->set(compact('carrera'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Carrera id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $carrera = $this->Carrera->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $carrera = $this->Carrera->patchEntity($carrera, $this->request->getData());
            if ($this->Carrera->save($carrera)) {
                $this->Flash->success(__('Se actualizo correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocurrió un error mientras se intentaba guardar en la base de datos. Por favor, intente de nuevamente'));
        }
        $this->set(compact('carrera'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $carrera = $this->Carrera->get($id);
        if ($this->Carrera->delete($carrera)) {
            $this->Flash->success(__('Se a eliminado correctamente.'));
        } else {
            $this->Flash->error(__('Ocurrió un error mientras se intentaba guardar en la base de datos. Por favor, intente de nuevamente'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function estudiantes($id = null)
    {
        $this->viewBuilder()->disableAutoLayout();

        $carrera = $this->Carrera->get($id, [
            'contain' => ['Estudiante'],
        ]);

        $this->set(compact('carrera'));
    }
}
