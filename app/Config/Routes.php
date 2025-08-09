<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

// Rutas de pruebas y otras funcionalidades
$routes->get('/Consultas', 'Home::consultas');
$routes->get('/reservas', 'Home::reservas');
$routes->get('/testconexion', 'CReservas::testconexion');
$routes->post('/guardarReserva', 'CReservas::InsertarReserva');
$routes->get('/verauto', 'CReservas::verauto');
$routes->get('/actualizar/(:num)', 'CActualizarReserva::actualizar/$1');
$routes->post('/guardarActualizacion/(:num)', 'CActualizarReserva::guardarActualizacion/$1');
$routes->get('/eliminar/(:num)', 'CEliminarReserva::eliminar/$1');
$routes->get('/testconexionOracle', 'CReservas::testconexionOracle');

// Rutas para pagos
$routes->get('/pagos', 'Cpagos::index');                   // Mostrar formulario de pago
$routes->post('/procesarPago', 'Cpagos::procesarPago');    // Procesar el pago (POST)
$routes->get('/datosguardados', 'Cpagos::datosGuardados'); // Confirmación datos guardados

// Rutas para usuarios
$routes->get('usuario/registrar', 'UsuarioController::registrar');
$routes->post('usuario/insertarUsuario', 'UsuarioController::insertarUsuario');
$routes->get('usuario/registroExitoso', 'UsuarioController::registroExitoso');
