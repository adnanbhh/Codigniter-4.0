<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Admin');
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

/////////////////////////////////////////////////////////////////////////////////////
////// Authentification
$routes->match(['get','post'],'/', 'Admin::index', ['filter' => 'noauth']);
//$routes->match(['get','post'], 'login', 'Admin::index');
$routes->match(['get','post'], 'register', 'Admin::register');


///////////////////////////////////////////////////////////////////////////////////
///////////////////////////// Groupe
$routes->get('group', 'Dashboard::group' , ['filter' => 'auth']);
$routes->match(['get','post'],'addGroup', 'Dashboard::addGroup' , ['filter' => 'auth']);
$routes->get('groupe/DeleteGroup', 'Dashboard::DeleteGroup' , ['filter' => 'auth']);
$routes->match(['get','post'],'groupe/UpdateGroup', 'Dashboard::UpdateGroup' , ['filter' => 'auth']);
$routes->match(['get','post'],'magic', 'Dashboard::addMagic' , ['filter' => 'auth']);
$routes->get('mAffiche', 'Dashboard::mAffiche' , ['filter' => 'auth']);




/////////////////////////////////////////////////////////////////////////////////////
///////////// Dashboard
$routes->get('Dash', 'Dashboard::index' , ['filter' => 'auth']);

/////////////////////////////////////////////////////////////////////////////////////
////Assets
$routes->get('asset', 'Dashboard::assets' , ['filter' => 'auth']);
$routes->get('basic_elements', 'Dashboard::basic_elements' , ['filter' => 'auth']);
$routes->match(['get','post'],'addAssets', 'Dashboard::addAssets' , ['filter' => 'auth']);
$routes->get('asset/DeleteAsset', 'Dashboard::DeleteAsset' , ['filter' => 'auth']);
$routes->match(['get','post'],'asset/UpdateAsset', 'Dashboard::UpdateAsset' , ['filter' => 'auth']);


/////////////////////////////////////////////////////////////////////////////////////
///// Category
$routes->get('category', 'Dashboard::category' , ['filter' => 'auth']);
$routes->match(['get','post'],'addCategory', 'Dashboard::addCategory' , ['filter' => 'auth']);
$routes->get('category/DeleteCategory', 'Dashboard::DeleteCategory' , ['filter' => 'auth']);
$routes->match(['get','post'],'category/UpdateCategory', 'Dashboard::UpdateCategory' , ['filter' => 'auth']);
//$routes->get('EditCategory', 'Dashboard::Editcategory' , ['filter' => 'auth']);

/////////////////////////////////////////////////////////////////////////////////////::
$routes->get('listAdmin', 'Dashboard::listAdmin' , ['filter' => 'auth']);
$routes->get('admin/DeleteAdmin', 'Dashboard::DeleteAdmin' , ['filter' => 'auth']);


$routes->get('basic_elements', 'Dashboard::basic_elements' , ['filter' => 'auth']);
$routes->get('chartjs', 'Dashboard::chartjs' , ['filter' => 'auth']);
$routes->get('basic_table', 'Dashboard::basic_table' , ['filter' => 'auth']);
$routes->get('registerUser', 'Dashboard::register' , ['filter' => 'auth']);


$routes->get('logout', 'Admin::logout');
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
