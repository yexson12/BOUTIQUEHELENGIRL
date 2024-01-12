<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\MarcacionModel;
class MarcacionController extends ResourceController
{
    protected $modelName = 'App\Models\MarcacionModel';
    protected $format = 'json';
    public function index()
    {
        return $this->genericResponse($this->model->findAll(),"",200);
    }


    public function show($id = NULL)
    {
        if ($id == null) {
            return $this->genericResponse(NULL, "Error al buscar", 500);
        }
        $movie = $this->model->find($id);
        if (!$movie) {
            return $this->genericResponse(NULL, "Error al buscar", 500);
        }
        return $this->genericResponse($movie, "", 200);
    }





    public function create()
    {
        
        $Marcacion = new MarcacionModel();

        // Obtén el contenido JSON de la solicitud
        $json = $this->request->getJson();
        // Verifica si se recibió contenido JSON
        if ($json) {
            // Accede a los datos del JSON
            $datosextraidos = $json->datosextraidos;
            $estado = $json->estado;
            // Ahora puedes realizar la validación y la inserción
            if ($this->validate('Marcacion')) {
                $id = $Marcacion->insert([
                    'datosextraidos' => $datosextraidos,
                    'fechaUltimactualizacion' =>"2023-12-12 00:00:00",
                    'estado' => $estado,
                ]);
                return $this->genericResponse($Marcacion->find($id), NULL, 200);
            } else {
                $validation = \Config\Services::validation();
                return $this->genericResponse(NULL, $validation->getErrors(), 500);
            }
        } else {
            // Manejar el caso en que no se recibió contenido JSON
            return $this->genericResponse(NULL, 'No se recibió contenido JSON en la solicitud', 400);
        }
    }

    function genericResponse($data, $msj, $code)
    {
    if ($code == 200) {
        return $this->respond(array(
            "data" => $data,        
            "code" => $code));
           
    } else {
        return $this->respond(array(
        "msj" => $msj,     
        "code" => $code));
    }
    }
}
