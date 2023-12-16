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

