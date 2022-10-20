<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Routing\Router;
use Spatie\Browsershot\Browsershot;
use src\Model\Entity;
use Cake\Chronos\Chronos;

class ReportesController extends AppController
{
    public function initialize(): void {
        $this->loadModel('Estudiante');
        $this->loadModel('Carrera');
        $this->loadModel('Notas');
    }

    public function index() {
        $estudiante = $this->Estudiante->newEmptyEntity();
        $carrera = $this->Carrera->newEmptyEntity();
        $nota = $this->Notas->newEmptyEntity();

        $query = $this->Estudiante->find();
        $estudiantes = $query->select(['ID_ESTUDIANTE', 'NOMBRE' => $query->func()->concat([
            'NOMBRE'=>'identifier',
            ' ',
            'APELLIDO'=>'identifier'
        ])
        ])->all()->combine('ID_ESTUDIANTE', 'NOMBRE')->ToArray();

        $carreras = $this->getTableLocator()->get('Carrera')->find()->all()->combine('ID_CARRERA', 'NOMBRE')->ToArray();

        $cursos = $this->getTableLocator()->get('Curso')->find()->all()->combine('ID_CURSO', 'NOMBRE')->ToArray();

        $secciones = $this->getTableLocator()->get('Notas')->find()->select('SECCION')->distinct('SECCION')->all()->combine('SECCION', 'SECCION')->ToArray();

        $this->set(compact('estudiante','estudiantes', 'carrera','carreras', 'nota', 'cursos','secciones'));
    }

    public function observaciones() {
        if ($this->request->is('post')) {
            $obj = $this->request->getData();

            if (isset($obj['ID_ESTUDIANTE'])) {
                $id = $obj['ID_ESTUDIANTE'];
                $pdf = Browsershot::url(Router::url([
                    '_host' => $_SERVER["SERVER_NAME"],
                    '_port' => $_SERVER["SERVER_PORT"],
                    'controller'=>'estudiante',
                    'action'=>'observaciones',
                    $id
                ], true))
                    ->noSandbox()
                    ->pdf();
                $response = $this->getResponse();
                $response = $response->withStringBody($pdf)
                    ->withType('pdf');
                $response = $response->withDownload(Chronos::now()->format('Y-m-d')."-observaciones-".$id.".pdf");

                return $response;
            }
        }
    }

    public function estudiantes() {
        if ($this->request->is('post')) {
            $obj = $this->request->getData();

            if (isset($obj['ID_CARRERA'])) {
                $id = $obj['ID_CARRERA'];
                $pdf = Browsershot::url(Router::url([
                    '_host' => $_SERVER["SERVER_NAME"],
                    '_port' => $_SERVER["SERVER_PORT"],
                    'controller'=>'carrera',
                    'action'=>'estudiantes',
                    $id,
                ], true))
                    ->noSandbox()
                    ->pdf();
                $response = $this->getResponse();
                $response = $response->withStringBody($pdf)
                    ->withType('pdf');

                $response = $response->withDownload(Chronos::now()->format('Y-m-d')."-lista-estudiantes-".$id.".pdf");

                return $response;
            }
        }
    }

    public function notas() {
        if ($this->request->is('post')) {
            $obj = $this->request->getData();

            if (isset($obj['ID_CARRERA']) && isset($obj['SECCION']) && isset($obj['ID_CURSO'])) {
                $seccion = $obj['SECCION'];
                $curso = $obj['ID_CURSO'];
                $carrera = $obj['ID_CARRERA'];


                $pdf = Browsershot::url(Router::url([
                    '_host' => $_SERVER["SERVER_NAME"],
                    '_port' => $_SERVER["SERVER_PORT"],
                    'controller'=>'notas',
                    'action'=>'notas',
                    $seccion,
                    $curso,
                    $carrera,
                ], true))
                    ->noSandbox()
                    ->pdf();
                $response = $this->getResponse();
                $response = $response->withStringBody($pdf)
                    ->withType('pdf');

                $response = $response->withDownload(Chronos::now()->format('Y-m-d')."-lista-estudiantes-".$seccion.".pdf");

                return $response;
            }
        }
    }
}
