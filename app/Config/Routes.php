<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('api', function ($routes) {
    $routes->post('login', 'Login::index');
    $routes->post('register', 'Register::index');
    
    $routes->get('transaksi', 'DataTransaksiController::getDataTransaksi', ['filter' => 'authFilter']);
    $routes->get('transaksi/(:segment)', 'DataTransaksiController::getDataTransaksiById/$1');
    $routes->post('transaksi', 'DataTransaksiController::createDataTransaksi');
    $routes->put('transaksi/(:segment)', 'DataTransaksiController::updateDataTransaksi/$1');
    $routes->delete('transaksi/(:segment)', 'DataTransaksiController::deleteDataTransaksi/$1');
});

