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

//fIN

$routes->resource('marcacionapi',['controller'=> 'MarcacionController']);