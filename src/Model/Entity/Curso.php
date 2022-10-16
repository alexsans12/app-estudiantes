<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Curso Entity
 *
 * @property int $ID_CURSO
 * @property string $NOMBRE
 * @property string|null $DESCRIPCION
 * @property bool|null $ESTADO
 */
class Curso extends Entity
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
        'NOMBRE' => true,
        'DESCRIPCION' => true,
        'ESTADO' => true,
    ];
}
