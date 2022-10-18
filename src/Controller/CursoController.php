<?php
declare(strict_types=1);

namespace App\Controller;

class CursoController extends AppController
{

    public function index()
    {
        $cursos = $this->paginate($this->Curso);
        $semestres = $this->Curso->Semestre->find()->all()->combine('ID_SEMESTRE', 'NOMBRE')->ToArray();
        $this->set(compact('cursos', 'semestres'));
    }

    public function view($id = null)
    {
        $curso = $this->Curso->get($id, [
            'contain' => ['Semestre'],
        ]);

        $this->set(compact('curso'));
    }

    public function add()
    {
        $curso = $this->Curso->newEmptyEntity();
        if ($this->request->is('post')) {
            $curso = $this->Curso->patchEntity($curso, $this->request->getData());
            if ($this->Curso->save($curso)) {
                $this->Flash->success(__('Se guardo correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocurrió un error mientras se intentaba guardar en la base de datos. Por favor, intente de nuevamente.'));
        }

        $semestres = $this->Curso->Semestre->find()->all()->combine('ID_SEMESTRE', 'NOMBRE');
        $this->set(compact('curso', 'semestres'));
    }

    public function edit($id = null)
    {
        $curso = $this->Curso->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $curso = $this->Curso->patchEntity($curso, $this->request->getData());
            if ($this->Curso->save($curso)) {
                $this->Flash->success(__('Se guardo correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocurrió un error mientras se intentaba guardar en la base de datos. Por favor, intente de nuevamente.'));
        }

        $semestres = $this->Curso->Semestre->find()->all()->combine('ID_SEMESTRE', 'NOMBRE');

        $this->set(compact('curso', 'semestres'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Curso id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $curso = $this->Curso->get($id);
        if ($this->Curso->delete($curso)) {
            $this->Flash->success(__('Se elimino correctamente.'));
        } else {
            $this->Flash->error(__('Ocurrió un error mientras se intentaba eliminar de la base de datos. Por favor, intente de nuevamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
