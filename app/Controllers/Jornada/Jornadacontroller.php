<?php
namespace App\Controllers\jornada; // Asegúrate de que esto sea correcto
use App\Controllers\BaseController as BaseController;
class Jornadacontroller extends BaseController
{

    public function listarempleado()
    {
        echo view('admin/template/headeradmin.php');
        echo view('admin/reporte/reporteusuario.php');
  
        echo view('admin/template/footeradmin.php');   
        
               // Agregar la etiqueta <script> directamente
               echo '<script src="' . base_url('/public/admin/reports/reportscript.js') . '"></script>'; 
    }
}
