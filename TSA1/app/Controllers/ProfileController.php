<?php

namespace App\Controllers;

use App\Models\UserModel;

class ProfileController extends BaseController
{
    public function index(): string
    {
        return view('profile/index', [
            'pageTitle' => 'Demo User Profile',
            'activePage' => 'profile',
            'user' => (new UserModel())->first(),
        ]);
    }
}
