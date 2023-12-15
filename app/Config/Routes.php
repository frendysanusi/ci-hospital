<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/', 'Login::index');
$routes->get('/doctor/visits', 'DoctorController::visits');
$routes->get('/doctor/visits/(:id)', 'DoctorController::visitsid');
$routes->post('/doctor/visits/(:id)', 'DoctorController::visitsid');
$routes->get('/doctor/profile', 'DoctorController::profile');
$routes->get('/doctor', 'DoctorController::index');
$routes->get('/admin', 'AdminController::index');
$routes->get('/admin/profile', 'AdminController::profile');
$routes->get('/admin/patients', 'AdminController::patients');
$routes->get('/admin/patients/(:id)', 'AdminController::patientsid');
$routes->post('/admin/patients/(:id)', 'AdminController::patientsid');
$routes->get('/admin/transactions', 'AdminController::transactions');
$routes->get('/admin/transactions', 'AdminController::transactions');


$routes->group('api', function ($routes) {
    $routes->post('login', 'Login::index');
    $routes->post('register', 'Register::index');
    
    $routes->get('transaksi', 'DataTransaksiController::getDataTransaksi', ['filter' => 'authFilter']);
    $routes->get('transaksi/(:segment)', 'DataTransaksiController::getDataTransaksiById/$1');
    $routes->post('transaksi', 'DataTransaksiController::createDataTransaksi');
    $routes->put('transaksi/(:segment)', 'DataTransaksiController::updateDataTransaksi/$1');
    $routes->delete('transaksi/(:segment)', 'DataTransaksiController::deleteDataTransaksi/$1');
});

