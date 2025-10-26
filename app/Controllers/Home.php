<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'admin_login_modal' => view('modals/admin_login_modal'),
            'faculty_login_modal' => view('modals/faculty_login_modal'),
            'registration_modal' => view('modals/registration_modal'),
        ];
        return view('home', $data);
    }
}
