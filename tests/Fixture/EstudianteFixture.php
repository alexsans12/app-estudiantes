<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EstudianteFixture
 */
class EstudianteFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'estudiante';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'ID_ESTUDIANTE' => 1,
                'NOMBRE' => 'Lorem ipsum dolor sit amet',
                'APELLIDO' => 'Lorem ipsum dolor sit amet',
                'FOTOGRAFIA' => 'Lorem ipsum dolor sit amet',
                'FECHA_NACIMIENTO' => '2022-10-16',
            ],
        ];
        parent::init();
    }
}
