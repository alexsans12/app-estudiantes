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
                $this->Flash->success(__('The curso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The curso could not be saved. Please, try again.'));
        }

        $semestres = $this->Curso->Semestre->find()->all()->combine('ID_SEMESTRE', 'NOMBRE');
        $this->set(compact('curso', 'semestres'));
    }

    public function edit($id = null)
    {
        $curso = $this->Curso->get($id, [
            'contain' => ['Semestre'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $curso = $this->Curso->patchEntity($curso, $this->request->getData());
            if ($this->Curso->save($curso)) {
                $this->Flash->success(__('The curso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The curso could not be saved. Please, try again.'));
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
            $this->Flash->success(__('The curso has been deleted.'));
        } else {
            $this->Flash->error(__('The curso could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
