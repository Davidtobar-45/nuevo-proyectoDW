<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//rutaspruebas
$routes->get('/Consultas', 'Home::consultas');

$routes->get('/reservas', 'Home::reservas');

$routes->get('/pagos', 'Home::pagos');

$routes->get('/testconexion', 'CReservas::testconexion');

$routes->post('/guardarReserva', 'CReservas::InsertarReserva');

$routes->get('/pagos', 'Cpagos::index'); // Ruta para mostrar el formulario de pago
$routes->post('/procesarPago', 'Cpagos::procesarPago'); // Ruta para procesar el pago

$routes->get('/datosguardados', 'Cpagos::datosGuardados'); // Ruta para la página de confirmación

$routes->get('/verauto', 'CReservas::verauto'); // Ruta para ver las reservas

$routes->get('/actualizar/(:num)', 'CActualizarReserva::actualizar/$1'); // Ruta para actualizar

$routes->post('/guardarActualizacion/(:num)', 'CActualizarReserva::guardarActualizacion/$1'); // Ruta para guardar la actualización

$routes->get('/eliminar/(:num)', 'CEliminarReserva::eliminar/$1'); // Ruta para eliminar

$routes->get('/testconexionOracle', 'CReservas::testconexionOracle'); // Ruta para la prueba de conexión Oracle

$routes->get('usuario/registrar', 'UsuarioController::registrar');
$routes->post('usuario/insertarUsuario', 'UsuarioController::insertarUsuario');
$routes->get('usuario/registroExitoso', 'UsuarioController::registroExitoso');



