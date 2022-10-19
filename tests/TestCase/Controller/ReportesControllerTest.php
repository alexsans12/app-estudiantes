<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\ReportesController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\ReportesController Test Case
 *
 * @uses \App\Controller\ReportesController
 */
class ReportesControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Reportes',
    ];
}
