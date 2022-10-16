<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CarreraFixture
 */
class CarreraFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'carrera';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'ID_CARRERA' => 1,
                'NOMBRE' => 'Lorem ipsum dolor sit amet',
                'DESCRIPCION' => 'Lorem ipsum dolor sit amet',
                'ESTADO' => 1,
            ],
        ];
        parent::init();
    }
}
