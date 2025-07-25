<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/vista1', 'Home::index1');
$routes->get('/vista2', 'Home::index2');
$routes->get('/vista3', 'Home::index3');
$routes->get('/Suma', 'Suma::index');
$routes->post('/Suma/procesar','Suma::psumar');
$routes->get('/VistasCss/(:num)', 'ControladorCss::index/$1');
// Voy a crear una ruta para testear la conexion de bdd
$routes->get('/test', 'Home::MetodoTestear');
// Crear una ruta para ver el select
$routes->get('/Select', 'Home::ControladorSelectUsuarioFuncion');
/* 
Primera ruta es get y Esta es la ruta para mostrar el formulario del Insert
Segunda ruta es post y es para recopilar y enviar los datos a la base
*/
$routes->get('/Insert', 'Home::indexInsert');
$routes->post('/Crear','Home::insertUsuario');
// Ruta para eliminar usuario
$routes->get('/eliminar/(:any)', 
'Home::eliminarUsuario/$1');