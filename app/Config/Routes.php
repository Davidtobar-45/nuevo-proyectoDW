<?php

use CodeIgniter\Router\RouteCollection;

// Variable para las rutas
/**
 * @var RouteCollection $routes
 */

// Ruta principal de la página, muestra la página de inicio
$routes->get('/', 'Home::index');

// Permite que las rutas se creen automáticamente según el controlador y método
$routes->setAutoRoute(true);

// Ruta para mostrar la página Z1 en el controlador de zapatos
$routes->get('Z1', 'ControladorZapatos::Z1');

// Ruta para mostrar la página Z2 en el controlador de zapatos
$routes->get('Z2', 'ControladorZapatos::Z2');

// Ruta para mostrar la página V1 en el controlador de vestidos
$routes->get('V1', 'ControladorVestido::V1');

// Ruta para mostrar la página V2 en el controlador de vestidos
$routes->get('V2', 'ControladorVestido::V2');

// Ruta para mostrar la página C1 en el controlador de carteras
$routes->get('C1', 'ControladorCartera::C1');

// Ruta para mostrar la página C2 en el controlador de carteras
$routes->get('C2', 'ControladorCartera::C2');
