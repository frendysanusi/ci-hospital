<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('api', function ($routes) {
    $routes->post('login', 'Login::index');
    $routes->post('register', 'Register::index');

    $routes->get('recapTransaksi', 'DataTransaksiController::recapTransaksi');
    
    $routes->group('transaksi', function ($routes) {
        $filter = ['filter' => 'authFilter'];

        $routes->get('', 'DataTransaksiController::getDataTransaksi', $filter);
        $routes->get('(:segment)', 'DataTransaksiController::getDataTransaksiById/$1', $filter);
        $routes->post('', 'DataTransaksiController::createDataTransaksi', $filter);
        $routes->put('(:segment)', 'DataTransaksiController::updateDataTransaksi/$1', $filter);
        $routes->delete('(:segment)', 'DataTransaksiController::deleteDataTransaksi/$1', $filter);
    });
});

