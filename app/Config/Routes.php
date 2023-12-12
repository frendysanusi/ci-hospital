<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/api/transaksi', 'DataTransaksiController::getDataTransaksi');
$routes->get('/api/transaksi/(:segment)', 'DataTransaksiController::getDataTransaksiById/$1');
$routes->post('/api/transaksi', 'DataTransaksiController::createDataTransaksi');
$routes->put('/api/transaksi/(:segment)', 'DataTransaksiController::updateDataTransaksi/$1');
$routes->delete('/api/transaksi/(:segment)', 'DataTransaksiController::deleteDataTransaksi/$1');
