<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//http://localhost/nuevo-proyectoDW/vista1
$routes->get('/Vista1', 'Home::MetodoMostrarFormulario2');