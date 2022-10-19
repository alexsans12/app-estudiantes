<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Routing\Router;
use Spatie\Browsershot\Browsershot;
use src\Model\Entity;

class ReportesController extends AppController
{
    public function initialize(): void {
        $this->loadModel('Estudiante');
        $this->loadModel('Carrera');
    }

    public function index() {
        $estudiante = $this->Estudiante->newEmptyEntity();
        $carrera = $this->Carrera->newEmptyEntity();

        $query = $this->Estudiante->find();
        $estudiantes = $query->select(['ID_ESTUDIANTE', 'NOMBRE' => $query->func()->concat([
            'NOMBRE'=>'identifier',
            ' ',
            'APELLIDO'=>'identifier'
        ])
        ])->all()->combine('ID_ESTUDIANTE', 'NOMBRE')->ToArray();

        $carreras = $this->getTableLocator()->get('Carrera')->find()->all()->combine('ID_CARRERA', 'NOMBRE')->ToArray();

        $this->set(compact('estudiante','estudiantes', 'carrera','carreras'));
    }

    public function create() {
        $pdf = Browsershot::url(Router::url([
            '__host'=>'apache',
            '__port'=>'8888',
            'controller'=>'estudiante',
            'action'=>'view',
            1
        ], true))
            ->noSandbox()
            ->pdf();
        $response = $this->getResponse();
        $response = $response->withStringBody($pdf)
            ->withType('pdf');

        return $response;
    }

    public function observaciones() {
        if ($this->request->is('post')) {
            $obj = $this->request->getData();

            if (isset($obj['ID_ESTUDIANTE'])) {
                $id = $obj['ID_ESTUDIANTE'];
                $pdf = Browsershot::url(Router::url([
                    '__host'=>'apache',
                    '__port'=>'8888',
                    'controller'=>'estudiante',
                    'action'=>'observaciones',
                    $id
                ], true))
                    ->noSandbox()
                    ->pdf();
                $response = $this->getResponse();
                $response = $response->withStringBody($pdf)
                    ->withType('pdf');

                return $response;
            }
        }
    }
}
