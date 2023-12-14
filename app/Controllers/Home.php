<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('Login/login.php');
    }

    public function admin()
    {

        
    echo view('admin/template/headeradmin.php');
    echo view('admin/admin.php');
    echo view('admin/template/footeradmin.php');    

    }
    
}
