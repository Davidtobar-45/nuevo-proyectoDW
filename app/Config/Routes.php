<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->get('/', 'Login::dashboard', ['filter' => 'auth']);


$routes->post('login/auth', 'Login::auth');
$routes->get('logout', 'Login::logout');

// Ruta para dashboard (vista bienvenida)
$routes->get('dashboard', 'Login::dashboard', ['filter' => 'auth']);

// Ruta dinámica para productos con dos variables
$routes->get('(:segment)/(:num)', 'Productos::index/$1/$2');

$routes->get('dashboard', 'Login::dashboard', ['filter' => 'auth']);
$routes->get('(:segment)/(:num)', 'Productos::index/$1/$2', ['filter' => 'auth']);

// CREAR RUTA PARA TESTEAR LA CONEXION DE LA BASE DE DATOS
$routes->get('/test', 'Home::MetodoTestear');

//CREAR RUTA PARA VER SELECT
$routes->get('/Select ',h)