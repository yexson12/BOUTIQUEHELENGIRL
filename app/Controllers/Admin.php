<?php

namespace App\Controllers;

use App\Models\AdministradorModel;

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

  public function obtenerjornada()
  {
    if ($this->request->getMethod() === 'post') {
      // Obtener las fechas del cuerpo de la solicitud POST
      $fechaInicio = $this->request->getPost('fecha_inicio');
      $fechaFin = $this->request->getPost('fecha_fin');

      // Validar las fechas según tus necesidades
      // ...

      // Cargar el modelo
      $modelo = new AdministradorModel();

      // Llamar al método del modelo con las fechas como parámetros
      $resultados = $modelo->ObtenerResumenEmpleadoHoras($fechaInicio, $fechaFin );

      // Verificar si hay resultados
      if ($resultados->getNumRows() > 0) {
        // Devolver la respuesta en formato JSON
        return $this->response->setJSON(['success' => true, 'datos' => $resultados->getResultArray()]);
      } else {
        // Manejar el caso de error
        // Manejar el caso de error
        return $this->response->setJSON(['success' => false, 'message' => 'No hay datos para el rango: ' . $fechaInicio . ' - ' . $fechaFin]);
      }
    } else {
      // Manejar el caso de solicitud no válida (no es POST)
      return $this->response->setStatusCode(405)->setJSON(['error' => 'Método no permitido.']);
    }
  }
}
