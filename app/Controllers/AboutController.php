<?php

namespace App\Controllers;

class AboutController extends BaseController
{
    public function index(): string
    {
        return view('about/index', [
            'pageTitle' => 'About the System',
            'activePage' => 'about',
            'developerName' => env('app.developerName', 'Jacer Castillo'),
        ]);
    }
}
