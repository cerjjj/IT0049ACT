<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'DashboardController::index', ['as' => 'dashboard']);
$routes->get('/tasks', 'TasksController::index', ['as' => 'tasks']);
$routes->get('/profile', 'ProfileController::index', ['as' => 'profile']);
$routes->get('/about', 'AboutController::index', ['as' => 'about']);
