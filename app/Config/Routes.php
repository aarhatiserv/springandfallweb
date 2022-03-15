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
$routes->get('verifyGuest/(:num)/(:any)', 'User::verifyGuest/$1/$2');
$routes->get('tmp', 'User::temp');
$routes->post('setNewPassword', 'User::setNewPassword');

// Admin routes
$routes->group("admin", function ($routes) {

	//Admin Dshboard Routes
	$routes->get('/', 'Admin/AdminController::login');
	$routes->get('login', 'Admin/AdminController::login');
	$routes->post('login', 'Admin/AdminController::loginPost');
	$routes->get('logout', 'Admin/AdminController::logout');
	$routes->get('home', 'Admin/AdminController::home');
	$routes->get('home2', 'Admin/AdminController::home2');
	$routes->get('home3', 'Admin/AdminController::home3');
	$routes->get('addAdmin', 'Admin/AdminController::admin');
	$routes->post('addAdmin', 'Admin/AdminController::addAdminPost');

	$routes->get('forgotPassword', 'Admin/AdminController::forgotPassword');
	$routes->post('forgotPassword', 'Admin/AdminController::forgotPasswordPost');

	// Admin Department Routes
	$routes->get('department', 'Admin/DepartmentController::department');
	$routes->get('addDepartment', 'Admin/DepartmentController::addDepartment');
	$routes->post('addDepartment', 'Admin/DepartmentController::addDepartmentPost');
	$routes->get("editDepartment/(:any)", "Admin\DepartmentController::editDepartment/$1"); // subfolder me '/' nehi '\' ata he Like 'Admin/CollegeController::editCollege/$1' nehi 'Admin\CollegeController::editCollege/$1' ata he
	$routes->post('editDepartment', 'Admin/DepartmentController::editDepartmentPost');
	$routes->get("deleteDepartment/(:any)", "Admin\DepartmentController::deleteDepartment/$1"); // subfolder me '/' nehi '\' ata he Like 'Admin/CollegeController::editCollege/$1' nehi 'Admin\CollegeController::editCollege/$1' ata he

	// Admin Department Routes
	$routes->get('level', 'Admin/LevelController::level');
	$routes->get('addLevel', 'Admin/LevelController::addLevel');
	$routes->post('addLevel', 'Admin/LevelController::addLevelPost');
	$routes->get("editLevel/(:any)", "Admin\LevelController::editLevel/$1"); // subfolder me '/' nehi '\' ata he Like 'Admin/CollegeController::editCollege/$1' nehi 'Admin\CollegeController::editCollege/$1' ata he
	$routes->post('editLevel', 'Admin/LevelController::editLevelPost');
	$routes->get("deleteLevel/(:any)", "Admin\LevelController::deleteLevel/$1"); // subfolder me '/' nehi '\' ata he Like 'Admin/CollegeController::editCollege/$1' nehi 'Admin\CollegeController::editCollege/$1' ata he

	// Admin Course Routes
	$routes->get("addCourse/(:any)", "Admin\CourseController::addCourse/$1"); // subfolder me '/' nehi '\' ata he Like 'Admin/CollegeController::editCollege/$1' nehi 'Admin\CollegeController::editCollege/$1' ata he
	$routes->post('addCourse', 'Admin/CourseController::addCoursePost');
	$routes->get("editCourse/(:any)/(:any)", "Admin\CourseController::editCourse/$1/$2"); // subfolder me '/' nehi '\' ata he Like 'Admin/CollegeController::editCollege/$1' nehi 'Admin\CollegeController::editCollege/$1' ata he
	$routes->post('editCourse', 'Admin/CourseController::editCoursePost');
	$routes->get("deleteCourse/(:any)/(:any)", "Admin\CourseController::deleteCourse/$1/$2"); // subfolder me '/' nehi '\' ata he Like 'Admin/CollegeController::editCollege/$1' nehi 'Admin\CollegeController::editCollege/$1' ata he

	// Admin Colleges Routes
	$routes->get('colleges', 'Admin/CollegeController::colleges');
	$routes->get('addColleges', 'Admin/CollegeController::addColleges');
	$routes->get('AddCsv', 'Admin/CollegeController::AddCsv');
	$routes->post('import-csv', 'Admin/CollegeController::importCsvToDb');
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

	// Admin Colleges Routes
	$routes->get('hotCourses', 'Admin/HotCoursesController::hotCourses');
	$routes->get('addHotCourses', 'Admin/HotCoursesController::addHotCourses');
	$routes->post('addHotCourses', 'Admin/HotCoursesController::addHotCoursesPost');
	$routes->get("editHotCourses/(:any)", "Admin\HotCoursesController::editHotCourses/$1"); // subfolder me '/' nehi '\' ata he Like 'Admin/CollegeController::editCollege/$1' nehi 'Admin\CollegeController::editCollege/$1' ata he
	$routes->post('editHotCourses', 'Admin/HotCoursesController::editHotCoursesPost');
	$routes->get("deleteHotCourses/(:any)", "Admin\HotCoursesController::deleteHotCourses/$1"); // subfolder me '/' nehi '\' ata he Like 'Admin/CollegeController::editCollege/$1' nehi 'Admin\CollegeController::editCollege/$1' ata he

	// Admin Subscribe Routes
	$routes->get('subscribe', 'Admin/SubscribeController::getSubscribe');
	$routes->get("deleteSubscribe/(:any)", "Admin\SubscribeController::deleteSubscribe/$1"); // subfolder me '/' nehi '\' ata he Like 'Admin/CollegeController::editCollege/$1' nehi 'Admin\CollegeController::editCollege/$1' ata he

	// Admin User Routes
	$routes->get('user', 'Admin/UserController::getUserDetails');
	$routes->get('deleteUser/(:any)', 'Admin\UserController::deleteUser/$1');
	$routes->get('editUser/(:any)', 'Admin\UserController::editUser/$1');
	$routes->post('editUser', 'Admin/UserController::editUserPost');

	$routes->post('allUserData', 'Admin/UserController::getAllUserDetails');
	$routes->post('todayData', 'Admin/UserController::getTodayUserDetails');
	$routes->post('PreviousData', 'Admin/UserController::getPreviousDayUserDetails');
	$routes->post('lastTwoDaysData', 'Admin/UserController::getLastTwoDaysDataUserDetails');
	$routes->post('lastThreeDaysData', 'Admin/UserController::getLastThreeDaysDataUserDetails');
	$routes->post('lastFourDaysData', 'Admin/UserController::getLastFourDaysDataUserDetails');
	$routes->post('lastFiveDaysData', 'Admin/UserController::getLastFiveDaysDataUserDetails');
	$routes->post('lastSixDaysData', 'Admin/UserController::getLastSixDaysDataUserDetails');
	$routes->post('lastSevenDaysData', 'Admin/UserController::getLastSevenDaysDataUserDetails');
});

// auth routes

$routes->group("api", function ($routes) {
	$routes->post("register", "User::register");
	$routes->post("login", "User::login");
	$routes->get("profile", "User::details");
	$routes->get("logout", "User::logout");
	$routes->get("session_expire", "CollegeController::session_expire"); // Career-Guide details remove by session for guest
	$routes->post("editProfile", "User::editProfile");

	$routes->post("subscribe", "Pages::subscribe");

	$routes->get("college/(:any)", "CollegeController::getColleges/$1");
	$routes->get("course/(:any)", "CollegeController::getCourse/$1");
	$routes->get("level/(:any)", "CollegeController::getLevel/$1");


	$routes->get("test/(:any)", "CollegeController::getCoursesClickCountry/$1");


	$routes->post("careerGuide", "CollegeController::careerGuidePost");
	// $routes->post("careerGuide/imageUpload", "CollegeController::careerGuideImagePost");
	$routes->POST("apply", "CollegeController::apply");
	$routes->POST("applyForCollegeInConsultation", "CollegeController::applyForCollegeInConsultation");
});
$routes->get("api2/college/(:any)/(:any)", "CollegeController::getCollegesWithCourses/$1/$2");
$routes->get("api2/countryAndLevels/(:any)/(:any)", "CollegeController::getCountryAndLevels/$1/$2");
$routes->get("api2/courseAndLevel/(:any)/(:any)", "CollegeController::getCourseAndLevel/$1/$2");
$routes->get("api2/countryAndCourseAndLevel/(:any)/(:any)/(:any)", "CollegeController::getCountryAndCourseAndLevel/$1/$2/$3");

// For flag-section.php onclick call js to routes and show in condultation.php
// $routes->get('consultation/(:any)', 'Pages::flag/$1');

// for hit college name and show details of colleges
$routes->get('college/(:any)/(:any)', 'CollegeController::getCollegeDetails/$1/$2');

// for home landing page
$routes->get('welcome', 'Pages::welcome');

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