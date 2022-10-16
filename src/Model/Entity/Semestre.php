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
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'ID_CARRERA' => true,
        'ID_CURSO' => true,
        'CODIGO_SEMESTRE' => true,
        'Carrera' => true,
        'Curso' => true,
    ];
}
