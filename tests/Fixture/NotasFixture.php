<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NotasFixture
 */
class NotasFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'ID_NOTAS' => 1,
                'ID_CURSO' => 1,
                'ID_ESTUDIANTE' => 1,
                'NOTA' => 1,
                'APROBADO' => 1,
                'FECHA' => '2022-10-17',
                'FECHA_MODIFICACION' => '2022-10-17',
                'SECCION' => '',
            ],
        ];
        parent::init();
    }
}
