<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Registro::index'); // ruta base muestra el formulario de registro
$routes->post('registro/crear', 'Registro::crear');
$routes->get('/testconexion', 'Login::testconexion');
$routes->get('usuarios', 'Registro::listar');
