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
// $routes->get('/', 'Home::index');
$routes->get('/', 'Pages::index');
// $routes->get('/admin', 'AdminController::index');
// $routes->get('(:any)', 'Pages::view/$1');

// news routes
$routes->match(['get', 'post'], 'news/create', 'News::create');
$routes->match(['post'], '/home/callback', 'Pages::callback');
$routes->match(['get'], '/home/test', 'Pages::testdata');
$routes->get('news/(:segment)', 'News::view/$1');
$routes->get('news', 'News::index');
$routes->get('email', 'User::email');
$routes->get('verify/(:num)/(:any)', 'User::verify/$1/$2');
$routes->get('tmp', 'User::temp');

// Admin routes
$routes->group("admin", function ($routes) {
    $routes->get('home', 'Admin/AdminController::home');
	$routes->get('home2', 'Admin/AdminController::home2');
	$routes->get('home3', 'Admin/AdminController::home3');
	$routes->get('colleges', 'Admin/CollegeController::colleges');
	$routes->get('addColleges', 'Admin/Colleges/CollegeController::addColleges');
	$routes->post('addColleges', 'Admin/Colleges/CollegeController::addCollegesPost');
	
});


// auth routes

$routes->group("api", function ($routes) {
	$routes->post("register", "User::register");
	$routes->post("login", "User::login");
	$routes->get("profile", "User::details");
	$routes->get("logout", "User::logout");

	$routes->get("college/(:any)", "CollegeController::getColleges/$1");
	$routes->get("course/(:any)", "CollegeController::getCourse/$1");
	$routes->get("level/(:any)", "CollegeController::getLevel/$1");
	
});
$routes->get("api2/college/(:any)/(:any)", "CollegeController::getCollegesWithCourses/$1/$2");
$routes->get("api2/countryAndLevels/(:any)/(:any)", "CollegeController::getCountryAndLevels/$1/$2");
$routes->get("api2/courseAndLevel/(:any)/(:any)", "CollegeController::getCourseAndLevel/$1/$2");
$routes->get("api2/countryAndCourseAndLevel/(:any)/(:any)/(:any)", "CollegeController::getCountryAndCourseAndLevel/$1/$2/$3");

// main work
$routes->get('(:any)', 'Pages::view/$1');

// admin routes

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