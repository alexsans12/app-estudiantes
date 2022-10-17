<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Semestre Entity
 *
 * @property int $ID_SEMESTRE
 * @property int $ID_CARRERA
 * @property int $ID_CURSO
 * @property string $CODIGO_SEMESTRE
 *
 * @property \App\Model\Entity\Carrera[] $Carrera
 * @property \App\Model\Entity\Curso[] $Curso
 */
class Semestre extends Entity
{
    protected $_accessible = [
        'NOMBRE' => true,
    ];
}
