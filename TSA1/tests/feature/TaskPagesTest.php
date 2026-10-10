<?php

namespace Tests\Feature;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;
use CodeIgniter\Test\FeatureTestTrait;

final class TaskPagesTest extends CIUnitTestCase
{
    use DatabaseTestTrait;
    use FeatureTestTrait;

    protected $namespace = 'App';
    protected $basePath = APPPATH . 'Database';
    protected $refresh = true;
    protected $seed = 'DatabaseSeeder';

    public function testDashboardShowsOnlyTodaysTasks(): void
    {
        $todayCount = $this->db->table('tasks')->where('task_date', date('Y-m-d'))->countAllResults();
        $result = $this->get('/');

        $this->assertSame(4, $todayCount);
        $result->assertOK();
        $result->assertSee('tasks today');
        $result->assertSee('Today’s queue');
    }

    public function testRequiredPagesAreAvailable(): void
    {
        foreach (['/tasks', '/profile', '/about'] as $path) {
            $this->get($path)->assertOK();
        }
    }
}
