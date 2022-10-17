<?php
declare(strict_types=1);

namespace App\Controller;

class SemestreController extends AppController
{
    public function index()
    {
        $semestres = $this->paginate($this->Semestre);
        $this->set(compact('semestres'));
    }

    public function add()
    {
        $semestre = $this->Semestre->newEmptyEntity();
        if ($this->request->is('post')) {
            $semestre = $this->Semestre->patchEntity($semestre, $this->request->getData());
            if ($this->Semestre->save($semestre)) {
                $this->Flash->success(__('Se a guardado correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocurrió un error mientras se intentaba guardar en la base de datos. Por favor, intente de nuevamente.'));
        }

        $this->set(compact('semestre'));
    }

    public function edit($id = null)
    {
        $semestre = $this->Semestre->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $semestre = $this->Semestre->patchEntity($semestre, $this->request->getData());
            if ($this->Semestre->save($semestre)) {
                $this->Flash->success(__('Se a actualizado correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocurrió un error mientras se intentaba guardar en la base de datos. Por favor, intente de nuevamente.'));
        }

        $this->set(compact('semestre'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $semestre = $this->Semestre->get($id);
        if ($this->Semestre->delete($semestre)) {
            $this->Flash->success(__('Se a eliminado correctamente.'));
        } else {
            $this->Flash->error(__('Ocurrió un error mientras se intentaba guardar en la base de datos. Por favor, intente de nuevamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
