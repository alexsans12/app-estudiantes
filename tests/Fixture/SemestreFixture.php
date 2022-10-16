<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SemestreFixture
 */
class SemestreFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'semestre';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'ID_SEMESTRE' => 1,
                'ID_CARRERA' => 1,
                'ID_CURSO' => 1,
                'CODIGO_SEMESTRE' => 'Lorem ipsum dolor sit a',
            ],
        ];
        parent::init();
    }
}
