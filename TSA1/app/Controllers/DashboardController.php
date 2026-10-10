<?php

namespace App\Controllers;

use App\Models\TaskModel;

class DashboardController extends BaseController
{
    public function index(): string
    {
        $today = date('Y-m-d');
        $tasks = (new TaskModel())
            ->where('task_date', $today)
            ->orderBy('created_at', 'ASC')
            ->findAll();

        return view('dashboard/index', [
            'pageTitle' => 'Today Dashboard',
            'activePage' => 'dashboard',
            'today' => $today,
            'tasks' => $tasks,
        ]);
    }
}
