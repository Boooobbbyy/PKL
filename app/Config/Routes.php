<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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
$routes->get('/dp1', 'Home::dp1');
$routes->get('/dp2', 'Home::dp2');
$routes->get('/interior', 'Home::interior');
$routes->get('/developer', 'Home::develop');
$routes->get('/remodelling', 'Home::commer');
$routes->get('/bla', 'Home::bla');
//=================================== service =========================================//
$routes->get('/konsultan', 'Service::konsultan');
$routes->get('/kompetensi', 'Service::kompetensi');
$routes->get('/mitra', 'Service::mitra');
$routes->get('/perencanaan', 'Service::perencanaan');
$routes->get('/pelayanan', 'Service::pelayanan');
$routes->get('/arsitektur', 'Service::arsitektur');
//=================================== proyek ===========================================//
$routes->get('/proyek1', 'Proyek::p1');
$routes->get('/proyek2', 'Proyek::p2');
$routes->get('/proyek3', 'Proyek::p3');
$routes->get('/proyek4', 'Proyek::p4');
$routes->get('/proyek5', 'Proyek::p5');
$routes->get('/proyek6', 'Proyek::p6');
$routes->get('/proyek7', 'Proyek::p7');
$routes->get('/proyek8', 'Proyek::p8');
$routes->get('/proyek9', 'Proyek::p9');
//=================================== admin ===========================================//
$routes->get('/Login', 'Auth');
$routes->get('/login', 'Auth');
$routes->get('/Logout', 'Auth::logout');
$routes->get('/logout', 'Auth::logout');

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
