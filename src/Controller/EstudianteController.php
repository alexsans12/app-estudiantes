<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\I18n\FrozenTime;

class EstudianteController extends AppController
{
    public function index()
    {
        $estudiantes = $this->paginate($this->Estudiante);
        $carreras = $this->Estudiante->Carrera->find()->all()->combine('ID_CARRERA', 'NOMBRE')->ToArray();
        $this->set(compact('estudiantes', 'carreras'));
    }

    public function view($id = null)
    {
        $estudiante = $this->Estudiante->get($id, [
            'contain' => ['Carrera'],
        ]);

        $this->set(compact('estudiante'));
    }

    public function add()
    {
        $estudiante = $this->Estudiante->newEmptyEntity();
        if ($this->request->is('post')) {
            $estudiante = $this->Estudiante->patchEntity($estudiante, $this->request->getData());

            $image = $this->request->getData('FOTOGRAFIA');

            if ($image && $image->getClientFileName()) {
                $timestamp = FrozenTime::now()->toUnixString();
                $imageName = $timestamp."_".$image->getClientFileName();
                $folder = WWW_ROOT."img/fotografias/".$imageName;
                $estudiante->FOTOGRAFIA = $imageName;
                $image->moveTo($folder);
            } else {
                $estudiante->FOTOGRAFIA = "";
            }

            if ($this->Estudiante->save($estudiante)) {
                $this->Flash->success(__('The estudiante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estudiante could not be saved. Please, try again.'));
        }

        $carreras = $this->Estudiante->Carrera->find()->where(['ESTADO'=>true])->all()->combine('ID_CARRERA', 'NOMBRE');
        $this->set(compact('estudiante', 'carreras'));
    }

    public function edit($id = null)
    {
        $estudiante = $this->Estudiante->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imageOld = $estudiante->FOTOGRAFIA;

            $estudiante = $this->Estudiante->patchEntity($estudiante, $this->request->getData());

            $image = $this->request->getData('FOTOGRAFIA');
            $estudiante->FOTOGRAFIA = $imageOld;

            if ($image->getClientFileName()) {
                if (file_exists(WWW_ROOT."img/fotografias/".$imageOld)) {
                    unlink(WWW_ROOT."img/fotografias/".$imageOld);
                }

                $timestamp = FrozenTime::now()->toUnixString();
                $imageName = $timestamp."_".$image->getClientFileName();
                $folder = WWW_ROOT."img/fotografias/".$imageName;
                $estudiante->FOTOGRAFIA = $imageName;
                $image->moveTo($folder);
            }



            if ($this->Estudiante->save($estudiante)) {
                $this->Flash->success(__('The estudiante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estudiante could not be saved. Please, try again.'));
        }

        $carreras = $this->Estudiante->Carrera->find()->where(['ESTADO'=>true])->all()->combine('ID_CARRERA', 'NOMBRE');

        $this->set(compact('estudiante', 'carreras'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estudiante = $this->Estudiante->get($id);
        if ($this->Estudiante->delete($estudiante)) {
            if (file_exists(WWW_ROOT."img/fotografias/".$estudiante->FOTOGRAFIA)) {
                unlink(WWW_ROOT."img/fotografias/".$estudiante->FOTOGRAFIA);
            }
            $this->Flash->success(__('The estudiante has been deleted.'));
        } else {
            $this->Flash->error(__('The estudiante could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
