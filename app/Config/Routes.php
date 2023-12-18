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
    $routes->post('visitsForm', 'KunjunganController::createVisit');
    $routes->get('visits/(:id)', 'KunjunganController::index/$1');
    $routes->put('visits/(:id)', 'KunjunganController::update/$1');
    $routes->get('profile', 'DokterController::index');
    $routes->get('', 'LandDokterController::index');
});

$routes->group('admin', function ($routes) {
    $filter = ['filter' => 'authFilter'];
    $routes->get('', 'LandAdminController::index');
    $routes->get('profile', 'ProfilController::index');
    $routes->get('patients', 'PasienController::index');
    $routes->get('patients/edit', 'PasienController::addForm');
    $routes->post('patients/edit', 'PasienController::createPasien');
    $routes->get('patients/edit/(:id)', 'PasienController::editForm/$1', $filter);
    $routes->post('patients/delete/(:id)', 'PasienController::deleteForm/$1', $filter);
    $routes->get('transactions', 'DataTransaksiController::index');
    $routes->post('transactions', 'DataTransaksiController::index');

    $routes->get('(patients/(:segment))', 'ObatController::getPasienById/$1');
    $routes->put('(patients/(:segment))', 'ObatController::updatePasien/$1', $filter);

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

    $routes->group('pasien', function ($routes) {
        $filter = ['filter' => 'authFilter'];

        $routes->put('(:segment)', 'PasienController::update/$1', $filter);
        $routes->delete('(:segment)', 'PasienController::delete/$1', $filter);
    });
});

