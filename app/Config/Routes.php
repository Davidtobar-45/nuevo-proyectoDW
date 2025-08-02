<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/', 'Login::index');
$routes->post('login', 'Login::login');
$routes->get('dashboard', 'Dashboard::index');
