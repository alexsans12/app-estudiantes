<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Observacion extends Entity
{
    protected $_accessible = [
        'ID_ESTUDIANTE' => true,
        'OBSERVACION' => true,
        'TIPO' => true,
        'FECHA_OBSERVACION' => true,
    ];
}
