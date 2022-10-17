<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ObservacionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ObservacionTable Test Case
 */
class ObservacionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ObservacionTable
     */
    protected $Observacion;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Observacion',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Observacion') ? [] : ['className' => ObservacionTable::class];
        $this->Observacion = $this->getTableLocator()->get('Observacion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Observacion);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ObservacionTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
