<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// RUTA PRINCIPAL -> FORMULARIO DE LOGIN
$routes->get('/', 'LoginController::index');

// PROCESO DE AUTENTICACIÓN Y CIERRE DE SESIÓN
$routes->post('/autenticar', 'LoginController::autenticar');
$routes->get('/logout', 'LoginController::logout');

// REDIRECCIÓN TRAS LOGIN EXITOSO
$routes->get('/viewselect', 'Home::ViewSelect');

$routes->get('/', 'Home::index');               // Opcional, tu vista bienvenida
$routes->get('/Insert', 'Home::indexInsert');  // Formulario de registro usuario
$routes->post('/Crear', 'Home::insertUsuario'); // Procesar registro usuario
$routes->get('/eliminar/(:any)', 'Home::eliminarUsuario/$1'); // Eliminar usuario


// VISTAS ADICIONALES
$routes->get('/vista1', 'Home::index1');
$routes->get('/vista2', 'Home::index2');
$routes->get('/vista3', 'Home::index3');

// OPERACIÓN DE SUMA
$routes->get('/Suma', 'Suma::index');
$routes->post('/Suma/procesar', 'Suma::psumar');

// VISTAS CSS DINÁMICAS
$routes->get('/VistasCss/(:num)', 'ControladorCss::index/$1');

// TESTEO DE CONEXIÓN A BASE DE DATOS
$routes->get('/test', 'Home::MetodoTestear');

// CONSULTA DE USUARIOS USANDO SP
$routes->get('/Select', 'Home::ControladorSelectUsuarioFuncion');
