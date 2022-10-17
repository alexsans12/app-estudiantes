<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstudianteTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstudianteTable Test Case
 */
class EstudianteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EstudianteTable
     */
    protected $Estudiante;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Estudiante',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Estudiante') ? [] : ['className' => EstudianteTable::class];
        $this->Estudiante = $this->getTableLocator()->get('Estudiante', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Estudiante);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EstudianteTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
