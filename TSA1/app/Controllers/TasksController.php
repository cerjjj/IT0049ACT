<?php

namespace App\Controllers;

use App\Models\TaskModel;

class TasksController extends BaseController
{
    public function index(): string
    {
        $tasks = (new TaskModel())
            ->orderBy('task_date', 'ASC')
            ->orderBy('created_at', 'ASC')
            ->findAll();

        return view('tasks/index', [
            'pageTitle' => 'All Tasks',
            'activePage' => 'tasks',
            'today' => date('Y-m-d'),
            'tasks' => $tasks,
        ]);
    }
}
