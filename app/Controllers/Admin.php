<?php

namespace App\Controllers;
class Admin extends BaseController
{
    public function admingeneral()
    {
        return view('admin/admin.php');
    }
    public function admintratrabajador()
    {


    echo view('admin/template/headeradmin.php');
      echo view('admin/admintrabajador.php');
      echo view('admin/template/footeradmin.php');    
    }
}
