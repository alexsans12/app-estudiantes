<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Estudiante extends Entity
{
    protected $_accessible = [
        'NOMBRE' => true,
        'APELLIDO' => true,
        'FOTOGRAFIA' => true,
        'FECHA_NACIMIENTO' => true,
        'ID_CARRERA' => true,
        'Carrera' => true,
        'Observacion' => true,
        'Notas' => true,
    ];
}
