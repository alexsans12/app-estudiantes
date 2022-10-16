<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CursoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CursoTable Test Case
 */
class CursoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CursoTable
     */
    protected $Curso;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
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
        $config = $this->getTableLocator()->exists('Curso') ? [] : ['className' => CursoTable::class];
        $this->Curso = $this->getTableLocator()->get('Curso', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Curso);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CursoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
