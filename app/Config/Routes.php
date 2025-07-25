<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'LoginController::index');
$routes->post('/autenticar', 'LoginController::autenticar');
$routes->get('/logout', 'LoginController::logout');
$routes->get('/viewselect', 'Home::ViewSelect');

// Tus rutas originales
$routes->get('/vista1', 'Home::index1');
$routes->get('/vista2', 'Home::index2');
$routes->get('/vista3', 'Home::index3');
$routes->get('/Suma', 'Suma::index');
$routes->post('/Suma/procesar', 'Suma::psumar');
$routes->get('/VistasCss/(:num)', 'ControladorCss::index/$1');

// Ruta para testear conexión BDD
$routes->get('/test', 'Home::MetodoTestear');

// Ruta para ver el select
$routes->get('/Select', 'Home::ControladorSelectUsuarioFuncion');

/* 
 Primera ruta es GET y muestra el formulario del Insert,
 Segunda ruta es POST para enviar datos a la base
*/
$routes->get('/Insert', 'Home::indexInsert');
$routes->post('/Crear', 'Home::insertUsuario');

// Ruta para eliminar usuario
$routes->get('/eliminar/(:any)', 'Home::eliminarUsuario/$1');
