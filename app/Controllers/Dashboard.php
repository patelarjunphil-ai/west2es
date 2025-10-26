<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        // Your dashboard logic goes here
        return view('dashboard');
    }
}
