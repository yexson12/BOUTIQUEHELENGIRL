<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('admin/', 'Home::admin');
$routes->get('admintrabajador/', 'Admin::admintratrabajador');
