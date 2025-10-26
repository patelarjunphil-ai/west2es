<?php

namespace App\Controllers;

class Migrate extends \CodeIgniter\Controller
{
    public function index()
    {
        $migrate = \Config\Services::migrations();

        try {
            $migrate->latest();
            echo 'Migrations ran successfully!';
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }
}
