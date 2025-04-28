<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::login');
$routes->get('admin', 'Home::index');
$routes->get('user', 'Home::index1');

$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');

$routes->get('admin', 'DashboardController::admin', ['filter' => 'role:admin']);
$routes->get('user', 'DashboardController::user', ['filter' => 'role:user']);