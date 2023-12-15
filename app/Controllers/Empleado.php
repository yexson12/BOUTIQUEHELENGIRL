<?php

namespace App\Controllers;
class Empleado extends BaseController
{

    public function listarempleado()
    {
      echo view('admin/template/headeradmin.php');
      echo view('admin/empleado/listEmpleado.php');
      echo view('admin/template/footeradmin.php');    
    }
}
