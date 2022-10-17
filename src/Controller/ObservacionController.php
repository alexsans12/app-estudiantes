<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Observacion Controller
 *
 * @property \App\Model\Table\ObservacionTable $Observacion
 * @method \App\Model\Entity\Observacion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ObservacionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $observaciones = $this->paginate($this->Observacion);

        $query = $this->Observacion->Estudiante->find();
        $estudiantes = $query->select(['ID_ESTUDIANTE', 'NOMBRE' => $query->func()->concat([
            'NOMBRE'=>'identifier',
            ' ',
            'APELLIDO'=>'identifier'
        ])
        ])->all()->combine('ID_ESTUDIANTE', 'NOMBRE')->ToArray();

        $this->set(compact('observaciones','estudiantes'));
    }

    public function view($id = null)
    {
        $observacion = $this->Observacion->get($id, [
            'contain' => ['Estudiante'],
        ]);

        $this->set(compact('observacion'));
    }

    public function add()
    {
        $observacion = $this->Observacion->newEmptyEntity();
        if ($this->request->is('post')) {
            $observacion = $this->Observacion->patchEntity($observacion, $this->request->getData());

            if ($this->Observacion->save($observacion)) {
                $this->Flash->success(__('The observacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The observacion could not be saved. Please, try again.'));
        }

        $query = $this->Observacion->Estudiante->find();
        $estudiantes = $query->select(['ID_ESTUDIANTE', 'NOMBRE' => $query->func()->concat([
            'NOMBRE'=>'identifier',
            ' ',
            'APELLIDO'=>'identifier'
        ])
        ])->all()->combine('ID_ESTUDIANTE', 'NOMBRE');
        $this->set(compact('observacion', 'estudiantes'));
    }

    public function edit($id = null)
    {
        $observacion = $this->Observacion->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $observacion = $this->Observacion->patchEntity($observacion, $this->request->getData());
            if ($this->Observacion->save($observacion)) {
                $this->Flash->success(__('The observacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The observacion could not be saved. Please, try again.'));
        }

        $query = $this->Observacion->Estudiante->find();
        $estudiantes = $query->select(['ID_ESTUDIANTE', 'NOMBRE' => $query->func()->concat([
            'NOMBRE'=>'identifier',
            ' ',
            'APELLIDO'=>'identifier'
        ])
        ])->all()->combine('ID_ESTUDIANTE', 'NOMBRE')->ToArray();

        $this->set(compact('observacion', 'estudiantes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Observacion id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $observacion = $this->Observacion->get($id);
        if ($this->Observacion->delete($observacion)) {
            $this->Flash->success(__('The observacion has been deleted.'));
        } else {
            $this->Flash->error(__('The observacion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
