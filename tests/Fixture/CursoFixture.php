<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CursoFixture
 */
class CursoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'curso';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'ID_CURSO' => 1,
                'NOMBRE' => 'Lorem ipsum dolor sit amet',
                'DESCRIPCION' => 'Lorem ipsum dolor sit amet',
                'ESTADO' => 1,
            ],
        ];
        parent::init();
    }
}
