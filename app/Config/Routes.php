<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Ruta base muestra login
$routes->get('/', 'LoginController::index');
$routes->post('/login', 'LoginController::login');
$routes->get('/dashboard', 'LoginController::dashboard');
$routes->get('/logout', 'LoginController::logout');


// Otras rutas personalizadas del usuario (puedes mantener estas si las usas)
$routes->get('/vista1', 'Home::index1');
$routes->get('/vista2', 'Home::index2');
$routes->get('/vista3', 'Home::index3');
$routes->get('/Suma', 'Suma::index');
$routes->post('/Suma/procesar','Suma::psumar');
$routes->get('/VistasCss/(:num)', 'ControladorCss::index/$1');
$routes->get('/test', 'Home::MetodoTestear');
$routes->get('/Select', 'Home::ControladorSelectUsuarioFuncion');
