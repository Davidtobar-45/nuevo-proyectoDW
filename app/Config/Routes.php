<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->put('api/usuarios/(:num)', 'UsuariosAPI::update/$1');
$routes->get('usuarios', 'UsuariosAPI::index');       // Para ver la tabla en navegador
$routes->put('api/usuarios/(:num)', 'UsuariosAPI::update/$1');  // Para actualizar por API
