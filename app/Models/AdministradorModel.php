<?php
namespace App\Models;
use CodeIgniter\Model;

class AdministradorModel extends Model
{
    public function ObtenerResumenEmpleadoHoras($fechaInicioParam, $fechaFinParam)
    {
        // Crear un builder para ejecutar el procedimiento almacenado
        $builder = $this->db->query('CALL ObtenerResumenEmpleadoHoras(?, ?)', [$fechaInicioParam, $fechaFinParam]);


        // Verificación de errores
        if (!$builder) {
            $error = $this->db->error();
            // Manejo de errores, puedes imprimir el mensaje o hacer lo que desees
            echo "Error: " . $error['message'];
            return false;
        }

        // Obtención de resultados
        return $builder;
    }
}