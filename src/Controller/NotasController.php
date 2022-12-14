<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Chronos\Chronos;
use Cake\Datasource\ConnectionManager;

class NotasController extends AppController
{
    public function index()
    {
        $notas = $this->paginate($this->Notas);

        $cursos = $this->Notas->Curso->find()->all()->combine('ID_CURSO', 'NOMBRE')->ToArray();

        $query = $this->Notas->Estudiante->find();
        $estudiantes = $query->select(['ID_ESTUDIANTE', 'NOMBRE' => $query->func()->concat([
            'NOMBRE'=>'identifier',
            ' ',
            'APELLIDO'=>'identifier'
        ])
        ])->all()->combine('ID_ESTUDIANTE', 'NOMBRE')->ToArray();

        $this->set(compact('notas', 'cursos', 'estudiantes'));
    }

    public function view($id = null)
    {
        $nota = $this->Notas->get($id, [
            'contain' => ['Curso','Estudiante'],
        ]);

        $this->set(compact('nota'));
    }

    public function add()
    {
        $nota = $this->Notas->newEmptyEntity();
        if ($this->request->is('post')) {
            $nota = $this->Notas->patchEntity($nota, $this->request->getData());

            if ($this->Notas->save($nota)) {
                $this->Flash->success(__('Se guardo correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocurrió un error mientras se intentaba guardar en la base de datos. Por favor, intente de nuevamente.'));
        }

        $cursos = $this->Notas->Curso->find()->all()->combine('ID_CURSO', 'NOMBRE')->ToArray();

        $query = $this->Notas->Estudiante->find();
        $estudiantes = $query->select(['ID_ESTUDIANTE', 'NOMBRE' => $query->func()->concat([
            'NOMBRE'=>'identifier',
            ' ',
            'APELLIDO'=>'identifier'
        ])
        ])->all()->combine('ID_ESTUDIANTE', 'NOMBRE')->ToArray();

        $this->set(compact('nota','cursos', 'estudiantes'));
    }

    public function edit($id = null)
    {
        $nota = $this->Notas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nota = $this->Notas->patchEntity($nota, $this->request->getData());
            if ($this->Notas->save($nota)) {
                $this->Flash->success(__('Se guardo correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocurrió un error mientras se intentaba guardar en la base de datos. Por favor, intente de nuevamente.'));
        }

        $cursos = $this->Notas->Curso->find()->all()->combine('ID_CURSO', 'NOMBRE')->ToArray();

        $query = $this->Notas->Estudiante->find();
        $estudiantes = $query->select(['ID_ESTUDIANTE', 'NOMBRE' => $query->func()->concat([
            'NOMBRE'=>'identifier',
            ' ',
            'APELLIDO'=>'identifier'
        ])
        ])->all()->combine('ID_ESTUDIANTE', 'NOMBRE')->ToArray();

        $this->set(compact('nota', 'cursos', 'estudiantes'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $nota = $this->Notas->get($id);
        if ($this->Notas->delete($nota)) {
            $this->Flash->success(__('Se a eliminda la nota correctamente.'));
        } else {
            $this->Flash->error(__('Ocurrió un error mientras se intentaba eliminar en la base de datos. Por favor, intente de nuevamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function notas($seccion = null, $curso = null, $carrera = null)
    {
        $this->viewBuilder()->disableAutoLayout();

        $db = ConnectionManager::get("default");

        $query = $db->execute("SELECT n.ID_NOTAS, n.NOTA, n.APROBADO, CONCAT(e.NOMBRE,' ',e.APELLIDO) AS NOMBRE_COMPLETO from notas n
        INNER JOIN estudiante e ON (n.ID_ESTUDIANTE=e.ID_ESTUDIANTE)
        WHERE n.SECCION = '$seccion' AND n.ID_CURSO = $curso AND e.ID_CARRERA = $carrera")->fetchAll();

        $carrera = $this->getTableLocator()->get('Carrera')->get($carrera);
        $curso = $this->getTableLocator()->get('Curso')->get($curso);

        $this->set(compact('query', 'carrera', 'curso', 'seccion'));
    }
}
