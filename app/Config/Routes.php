<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('admin/', 'Home::admin');

// EMPLEADO LISTA
$routes->get('admintrabajador/', 'Admin::admintratrabajador');
$routes->get('listarempleado/', 'Empleado::listarempleado');
$routes->get('listarreporte/', 'Report::listarreporte');

//CREACION DEL API OPTENER DATOS 
$routes->resource('marcacionapi1');
$routes->resource('marcacionapi',['controller'=> 'MarcacionController']);
//fIN

$routes->get('listaempleadonuevo', 'Jornada\Jornadacontroller::listarempleado');


///   listado vista
// Ruta para tu controlador y método
//$routes->get('listadojornada', 'Admin::obtenerjornada');

$routes->post('listadojornada', 'Admin::obtenerjornada');

