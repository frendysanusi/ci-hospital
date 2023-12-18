<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$filter = ['filter' => 'authFilter'];

$routes->get('/', 'Home::index');
$routes->post('/', 'Login::index');


$routes->group('doctor', function ($routes) {
    $routes->get('visits', 'KunjunganController::index');
    $routes->get('visitsForm', 'KunjunganController::showNewVisits');
    $routes->get('visits/(:id)', 'KunjunganController::index/$1');
    $routes->put('visits/(:id)', 'KunjunganController::update/$1');
    $routes->get('profile', 'DokterController::index');
    $routes->get('', 'LandDokterController::index');
});

$routes->group('admin', function ($routes) {
    $routes->get('', 'LandAdminController::index');
    $routes->get('profile', 'ProfilController::index');
    $routes->get('patients', 'PasienController::index');
    $routes->get('patients/(:id)', 'PasienController::index/$1');
    $routes->post('patients/(:id)', 'PasienController::index/$1');
    $routes->get('transactions', 'DataTransaksiController::index');
    $routes->post('transactions', 'DataTransaksiController::index');
});



$routes->group('api', function ($routes) {
    $routes->post('login', 'Login::index');
    $routes->post('register', 'Register::index');

    $routes->get('recapTransaksi', 'DataTransaksiController::recapTransaksi');
    
    $routes->group('transaksi', function ($routes) {
        $filter = ['filter' => 'authFilter'];

        $routes->get('', 'DataTransaksiController::getDataTransaksi', $filter);
        $routes->get('(:segment)', 'DataTransaksiController::getDataTransaksiById/$1', $filter);
        $routes->post('', 'DataTransaksiController::createDataTransaksi', $filter);
        $routes->put('(:segment)', 'DataTransaksiController::update/$1', $filter);
        $routes->delete('(:segment)', 'DataTransaksiController::deleteDataTransaksi/$1', $filter);
    });
});

