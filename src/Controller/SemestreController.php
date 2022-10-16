<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Semestre Controller
 *
 * @property \App\Model\Table\SemestreTable $Semestre
 * @method \App\Model\Entity\Semestre[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SemestreController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $semestres = $this->paginate($this->Semestre);

        $carreras = $this->Semestre->Carrera->find()->all()->combine("ID_CARRERA", "NOMBRE")->toArray();
        $cursos = $this->Semestre->Curso->find()->where(['ESTADO'=>true])->all()->combine("ID_CURSO", "NOMBRE")->toArray();
        $this->set(compact('semestres', 'carreras', 'cursos'));
    }

    /**
     * View method
     *
     * @param string|null $id Semestre id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $semestre = $this->Semestre->get($id, [
            'contain' => ['Carrera', 'Curso'],
        ]);

        $this->set(compact('semestre'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $semestre = $this->Semestre->newEmptyEntity();
        if ($this->request->is('post')) {
            $semestre = $this->Semestre->patchEntity($semestre, $this->request->getData());
            if ($this->Semestre->save($semestre)) {
                $this->Flash->success(__('The semestre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The semestre could not be saved. Please, try again.'));
        }

        $carreras = $this->Semestre->Carrera->find()->where(['ESTADO'=>true])->all()->combine("ID_CARRERA", "NOMBRE");
        $cursos = $this->Semestre->Curso->find()->where(['ESTADO'=>true])->all()->combine("ID_CURSO", "NOMBRE");
        $this->set(compact('semestre', 'carreras', 'cursos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Semestre id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $semestre = $this->Semestre->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $semestre = $this->Semestre->patchEntity($semestre, $this->request->getData());
            if ($this->Semestre->save($semestre)) {
                $this->Flash->success(__('The semestre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The semestre could not be saved. Please, try again.'));
        }
        $this->set(compact('semestre'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Semestre id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $semestre = $this->Semestre->get($id);
        if ($this->Semestre->delete($semestre)) {
            $this->Flash->success(__('The semestre has been deleted.'));
        } else {
            $this->Flash->error(__('The semestre could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
