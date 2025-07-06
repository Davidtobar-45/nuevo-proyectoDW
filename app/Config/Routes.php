<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->post('login/auth', 'Login::auth'); // Proceso de login
$routes->get('logout', 'Login::logout'); // Cerrar sesión
$routes->get('/', 'Login::dashboard', ['filter' => 'auth']);

$routes->get('/', 'Login::dashboard'); // Muestra login
$routes->post('login/auth', 'Login::auth'); // Procesa login
$routes->get('welcome', 'Login::welcome'); // Vista después del login
$routes->get('logout', 'Login::logout'); // Cierra sesión

$routes->get('(:segment)/(:num)', 'Productos::mostrar/$1/$2', ['filter' => 'auth']);
