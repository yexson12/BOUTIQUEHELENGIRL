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