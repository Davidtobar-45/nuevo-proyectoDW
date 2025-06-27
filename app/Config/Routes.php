<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//http://localhost/nuevo-proyectoDW/vista1
$routes->get('/Vista1', 'Home::MetodoMostrarFormulario2');
//http://localhost/nuevo-proyectoDW/vista1
$routes->get('/Vista', 'Home::MostrarFormulario2');

$routes->get('/vista2', 'Suma::cuerpo.php');