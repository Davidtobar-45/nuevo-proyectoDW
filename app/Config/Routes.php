<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Registro::listar');  // Ruta base muestra tabla usuarios primero
$routes->post('registro/crear', 'Registro::crear');
$routes->get('/testconexion', 'Login::testconexion');

// Rutas API para usuarios REST
$routes->group('api', function($routes) {
    $routes->get('usuarios', 'ApiUsuarios::index');          // Listar usuarios
    $routes->put('usuarios/(:num)', 'ApiUsuarios::update/$1'); // Actualizar usuario
    $routes->post('usuarios', 'ApiUsuarios::create');          // Crear usuario
});

// Opcional: redirigir /usuarios a la raíz para evitar duplicidad
$routes->get('usuarios', function() {
    return redirect()->to('/');
});
