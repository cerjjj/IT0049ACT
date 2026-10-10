<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('tasks')->truncate();

        $today = new \DateTimeImmutable('today');
        $yesterday = $today->modify('-1 day')->format('Y-m-d');
        $tomorrow = $today->modify('+1 day')->format('Y-m-d');
        $created = date('Y-m-d H:i:s');

        $this->db->table('tasks')->insertBatch([
            ['title' => 'Review the daily project priorities', 'status' => 'completed', 'task_date' => $today->format('Y-m-d'), 'created_at' => $created],
            ['title' => 'Prepare the team progress update', 'status' => 'in progress', 'task_date' => $today->format('Y-m-d'), 'created_at' => $created],
            ['title' => 'Check open support requests', 'status' => 'pending', 'task_date' => $today->format('Y-m-d'), 'created_at' => $created],
            ['title' => 'Submit the end-of-day summary', 'status' => 'pending', 'task_date' => $today->format('Y-m-d'), 'created_at' => $created],
            ['title' => 'Archive completed sprint notes', 'status' => 'completed', 'task_date' => $yesterday, 'created_at' => $created],
            ['title' => 'Confirm the weekly meeting agenda', 'status' => 'completed', 'task_date' => $yesterday, 'created_at' => $created],
            ['title' => 'Plan tomorrow sprint activities', 'status' => 'pending', 'task_date' => $tomorrow, 'created_at' => $created],
            ['title' => 'Schedule the stakeholder review', 'status' => 'pending', 'task_date' => $tomorrow, 'created_at' => $created],
        ]);
    }
}
