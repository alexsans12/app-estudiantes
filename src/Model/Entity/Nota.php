<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Nota extends Entity
{
    protected $_accessible = [
        'ID_CURSO' => true,
        'ID_ESTUDIANTE' => true,
        'NOTA' => true,
        'APROBADO' => true,
        'FECHA' => true,
        'FECHA_MODIFICACION' => true,
        'SECCION' => true,
        'curso'=>true,
        'estudiante'=>true,
    ];
}
