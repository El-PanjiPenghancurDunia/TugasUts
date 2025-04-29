<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::login');
$routes->get('produk', 'Home::index2');

$routes->match(['get', 'post'], 'login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');

$routes->get('admin', 'DashboardController::admin', ['filter' => 'role:admin']);
$routes->get('user', 'DashboardController::user', ['filter' => 'role:user']);
