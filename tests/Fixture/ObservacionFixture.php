<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ObservacionFixture
 */
class ObservacionFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'observacion';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'ID_OBSERVACION' => 1,
                'ID_ESTUDIANTE' => 1,
                'OBSERVACION' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'TIPO' => 1,
                'FECHA_OBSERVACION' => '2022-10-16',
            ],
        ];
        parent::init();
    }
}
