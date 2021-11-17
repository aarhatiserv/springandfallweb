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

	//Admin Dshboard Routes
    $routes->get('home', 'Admin/AdminController::home');
	$routes->get('home2', 'Admin/AdminController::home2');
	$routes->get('home3', 'Admin/AdminController::home3');

	// Admin Colleges Routes
	$routes->get('colleges', 'Admin/CollegeController::colleges');
	$routes->get('addColleges', 'Admin/CollegeController::addColleges');
	$routes->post('addColleges', 'Admin/CollegeController::addCollegesPost');
	$routes->get("editCollege/(:any)", "Admin\CollegeController::editCollege/$1"); // subfolder me '/' nehi '\' ata he Like 'Admin/CollegeController::editCollege/$1' nehi 'Admin\CollegeController::editCollege/$1' ata he
	$routes->post('editCollege', 'Admin/CollegeController::editCollegePost');
	$routes->get("deleteCollege/(:any)", "Admin\CollegeController::deleteCollege/$1"); // subfolder me '/' nehi '\' ata he Like 'Admin/CollegeController::editCollege/$1' nehi 'Admin\CollegeController::editCollege/$1' ata he

	//Admin Review Routes
	$routes->get('reviews', 'Admin/ReviewController::review');
	$routes->get('addReviews', 'Admin/ReviewController::addReview');
	$routes->post('addReviews', 'Admin/ReviewController::addReviewPost');
	$routes->get("editReviews/(:any)", "Admin\ReviewController::editReview/$1"); // subfolder me '/' nehi '\' ata he Like 'Admin/CollegeController::editCollege/$1' nehi 'Admin\CollegeController::editCollege/$1' ata he
	$routes->post('editReviews', 'Admin/ReviewController::editReviewPost');
	$routes->get("deleteReviews/(:any)", "Admin\ReviewController::deleteReview/$1"); // subfolder me '/' nehi '\' ata he Like 'Admin/CollegeController::editCollege/$1' nehi 'Admin\CollegeController::editCollege/$1' ata he

	//Admin Pages Routes
	$routes->get('pages', 'Admin/PagesController::pages');
	$routes->get('addPages', 'Admin/PagesController::addPages');
	$routes->post('addPages', 'Admin/PagesController::addPagesPost');
	$routes->get("editPages/(:any)", "Admin\PagesController::editPages/$1"); // subfolder me '/' nehi '\' ata he Like 'Admin/CollegeController::editCollege/$1' nehi 'Admin\CollegeController::editCollege/$1' ata he
	$routes->post('editPages', 'Admin/PagesController::editPagesPost');
	$routes->get("deletePages/(:any)", "Admin\PagesController::deletePages/$1"); // subfolder me '/' nehi '\' ata he Like 'Admin/CollegeController::editCollege/$1' nehi 'Admin\CollegeController::editCollege/$1' ata he
	
	//Admin Sections Routes
	$routes->get('sections', 'Admin/SectionsController::sections');
	$routes->get('allPagesInEdit', 'Admin/SectionsController::allPagesInEdit');
	$routes->get('addSections', 'Admin/SectionsController::addSections');
	$routes->post('addSections', 'Admin/SectionsController::addSectionsPost');
	$routes->get("editSections/(:any)", "Admin\SectionsController::editSections/$1"); // subfolder me '/' nehi '\' ata he Like 'Admin/CollegeController::editCollege/$1' nehi 'Admin\CollegeController::editCollege/$1' ata he
	$routes->post('editSections', 'Admin/SectionsController::editSectionsPost');
	$routes->get("deleteSections/(:any)", "Admin\SectionsController::deleteSections/$1"); // subfolder me '/' nehi '\' ata he Like 'Admin/CollegeController::editCollege/$1' nehi 'Admin\CollegeController::editCollege/$1' ata he
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