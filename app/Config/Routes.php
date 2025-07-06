<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->setAutoRoute(true);

$routes->get('Z1', 'ControladorZapatos::Z1');
$routes->get('Z2', 'ControladorZapatos::Z2');

$routes->get('V1', 'ControladorVestido::V1');
$routes->get('V2', 'ControladorVestido::V2');

$routes->get('C1', 'ControladorCartera::C1');
$routes->get('C2', 'ControladorCartera::C2');
