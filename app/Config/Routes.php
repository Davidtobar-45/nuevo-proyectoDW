<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Vista1', 'Home::index1');
$routes->get('/Vista2', 'Home::index2');
$routes->get('/Vista3', 'Home::index3');
$routes->get('/Suma', 'Suma::index');
$routes->get('/VistaCss', 'ControladorCss::index');

$routes->get('/test', 'Home::MetodoTestear');
$routes->get('/select', 'Home::ControladorSelectFuncion');
$routes->get('/insert', 'Home::indexInsert');
$routes->post('/Crear', 'Home::insertUsuario');
$routes->get('/Eliminar/(:any)', 'Home::deleteUsuario/$1');

$routes->get('/editar/(:num)', 'Home::editUsuario/$1');
$routes->post('/actualizar', 'Home::updateUsuario');

$routes->get('/update', 'Home::verVistaUpdate');
