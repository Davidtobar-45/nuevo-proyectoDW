<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//$routes->get('/', 'Registro::index'); // ruta base muestra el formulario de registro
$routes->post('registro/crear', 'Registro::crear');
$routes->get('/testconexion', 'Login::testconexion');
$routes->get('usuarios', 'Registro::listar');

$routes->get('/', 'Login::index');
$routes->post('login/autenticar', 'Login::autenticar');
$routes->get('panel', 'Panel::index');
$routes->post('panel/insertar', 'Panel::insertar');
$routes->post('panel/eliminar/(:num)', 'Panel::eliminar/$1');
$routes->get('login/salir', 'Login::salir');
