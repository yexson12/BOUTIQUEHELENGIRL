<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('Login/login.php');
    }

    public function admin(): string
    {
        return view('admin/admin.php');
    }
    
}
