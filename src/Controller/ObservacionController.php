<?php
declare(strict_types=1);

namespace App\Controller;

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
                $this->Flash->success(__('Se guardo correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocurrió un error mientras se intentaba guardar en la base de datos. Por favor, intente de nuevamente.'));
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
                $this->Flash->success(__('Se guardo correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocurrió un error mientras se intentaba guardar en la base de datos. Por favor, intente de nuevamente.'));
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

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $observacion = $this->Observacion->get($id);
        if ($this->Observacion->delete($observacion)) {
            $this->Flash->success(__('Se eliminado correctamente.'));
        } else {
            $this->Flash->error(__('Ocurrió un error mientras se intentaba elimnar de la base de datos. Por favor, intente de nuevamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
