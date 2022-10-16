<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SemestreTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SemestreTable Test Case
 */
class SemestreTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SemestreTable
     */
    protected $Semestre;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Semestre',
        'app.Carrera',
        'app.Curso',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Semestre') ? [] : ['className' => SemestreTable::class];
        $this->Semestre = $this->getTableLocator()->get('Semestre', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Semestre);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SemestreTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
