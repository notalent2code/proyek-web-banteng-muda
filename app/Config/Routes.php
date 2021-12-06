<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about');
$routes->get('/services', 'Page::services');
$routes->get('/membership', 'Page::membership');
$routes->get('/contact', 'Page::contact');
$routes->match(['get','post'], 'signup', 'Login::signup');
$routes->get('/login', 'Login::index');
$routes->get('logout', 'Login::logout');
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);
$routes->get('/profile', 'Dashboard::profile', ['filter' => 'auth']);

$routes->get('/anggota', 'Anggota::index', ['filter' => 'auth']);
$routes->get('/anggota/add_new', 'Anggota::add_new', ['filter' => 'auth']);
$routes->get('/anggota/save', 'Anggota::save', ['filter' => 'auth']);
$routes->get('/anggota/edit/(:num)', 'Anggota::edit/$1', ['filter' => 'auth']);
$routes->post('/anggota/update', 'Anggota::update', ['filter' => 'auth']);
$routes->get('/anggota/delete/(:num)', 'Anggota::delete/$1', ['filter' => 'auth']);

$routes->get('/simpanan', 'Simpanan::index', ['filter' => 'auth']);
$routes->get('/simpanan/add_new', 'Simpanan::add_new', ['filter' => 'auth']);
$routes->get('/simpanan/save', 'Simpanan::save', ['filter' => 'auth']);
$routes->get('/simpanan/edit/(:num)', 'Simpanan::edit/$1', ['filter' => 'auth']);
$routes->post('/simpanan/update', 'Simpanan::update', ['filter' => 'auth']);
$routes->get('/simpanan/delete/(:num)', 'Simpanan::delete/$1', ['filter' => 'auth']);

$routes->get('/pinjaman', 'Pinjaman::index', ['filter' => 'auth']);
$routes->get('/pinjaman/add_new', 'Pinjaman::add_new', ['filter' => 'auth']);
$routes->get('/pinjaman/save', 'Pinjaman::save', ['filter' => 'auth']);
$routes->get('/pinjaman/edit/(:num)', 'Pinjaman::edit/$1', ['filter' => 'auth']);
$routes->post('/pinjaman/update', 'Pinjaman::update', ['filter' => 'auth']);
$routes->get('/pinjaman/delete/(:num)', 'Pinjaman::delete/$1', ['filter' => 'auth']);

$routes->get('/iuran', 'Iuran::index', ['filter' => 'auth']);
$routes->get('/iuran/add_new', 'Iuran::add_new', ['filter' => 'auth']);
$routes->get('/iuran/save', 'Iuran::save', ['filter' => 'auth']);
$routes->get('/iuran/edit/(:num)', 'Iuran::edit/$1', ['filter' => 'auth']);
$routes->post('/iuran/update', 'Iuran::update', ['filter' => 'auth']);
$routes->get('/iuran/delete/(:num)', 'Iuran::delete/$1', ['filter' => 'auth']);

$routes->get('/angsuran', 'Angsuran::index', ['filter' => 'auth']);
$routes->get('/angsuran/add_new', 'Angsuran::add_new', ['filter' => 'auth']);
$routes->get('/angsuran/save', 'Angsuran::save', ['filter' => 'auth']);
$routes->get('/angsuran/edit/(:num)', 'Angsuran::edit/$1', ['filter' => 'auth']);
$routes->post('/angsuran/update', 'Angsuran::update', ['filter' => 'auth']);
$routes->get('/angsuran/delete/(:num)', 'Angsuran::delete/$1', ['filter' => 'auth']);

$routes->get('/user', 'User::index', ['filter' => 'auth']);
$routes->get('/user/add_new', 'User::add_new', ['filter' => 'auth']);
$routes->get('/user/save', 'User::save', ['filter' => 'auth']);
$routes->get('/user/edit/(:num)', 'User::edit/$1', ['filter' => 'auth']);
$routes->post('/user/update', 'User::update', ['filter' => 'auth']);
$routes->get('/user/delete/(:num)', 'User::delete/$1', ['filter' => 'auth']);



// $routes->get('/anggota', 'Data::anggota', ['filter' => 'auth']);
// $routes->get('/angsuran', 'Data::angsuran', ['filter' => 'auth']);
// $routes->get('/iuran', 'Data::iuran', ['filter' => 'auth']);
// $routes->get('/simpanan', 'Data::simpanan', ['filter' => 'auth']);
// $routes->get('/pinjaman', 'Data::pinjaman', ['filter' => 'auth']);
// $routes->get('/users', 'Users::index', ['filter' => 'auth']);


 /*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
