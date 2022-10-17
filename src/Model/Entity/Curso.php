<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Curso extends Entity
{
    protected $_accessible = [
        'NOMBRE' => true,
        'DESCRIPCION' => true,
        'ESTADO' => true,
        'ID_SEMESTRE' => true,
        'Semestre' => true,
    ];
}
