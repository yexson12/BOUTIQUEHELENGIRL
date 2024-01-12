<?php

namespace App\Controllers;
class Report extends BaseController
{

    public function listarreporte()
    {
      echo view('admin/template/headeradmin.php');
      echo view('admin/reporte/reporteusuario.php');

      echo view('admin/template/footeradmin.php');   
      
             // Agregar la etiqueta <script> directamente
             echo '<script src="' . base_url('/public/admin/reports/reportscript.js') . '"></script>';
    }
}
