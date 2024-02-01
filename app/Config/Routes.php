<?php

use App\Controllers\Items;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Page;
use App\Controllers\News;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/upload', 'UploadFileController::index');        
$routes->post('/upload/upload', 'UploadFileController::upload'); 
$routes->post('/upload/multiple', 'UploadFileController::upload_multiple'); 

$routes->get('/company', 'CompanyController::index');
$routes->get('/company/create', 'CompanyController::create');
$routes->post('/company/create', 'CompanyController::store');
$routes->get('/company/edit/(:num)', 'CompanyController::edit/$1');
$routes->post('/company/update/(:num)', 'CompanyController::update/$1');
$routes->get('/company/delete/(:num)', 'CompanyController::delete/$1');
$routes->get('/company/view/(:num)', 'CompanyController::view/$1');

$routes->get('/login', 'Auth::index');
$routes->post('/auth/login', 'Auth::login');
$routes->get('/auth/logout', 'Auth::logout');

$routes->get('/items', [Items::class, 'index']);
$routes->get('items/create', [Items::class, 'create']);
$routes->post('items', [Items::class, 'store']);
$routes->get('items/edit/(:num)', [Items::class, 'edit/$1']);
$routes->post('items/update/(:num)', [Items::class, 'update/$1']);
$routes->get('items/soft_delete/(:num)', [Items::class, 'soft_delete/$1']);
$routes->get('/items/deleted_items', [Items::class, 'softDeleteIndex']);
$routes->get('items/restore/(:num)', [Items::class, 'restore/$1']);
$routes->get('items/delete/(:num)', [Items::class, 'delete/$1']);

$routes->get('/news', [News::class, 'index']);
$routes->get('news/new', [News::class, 'new']);
$routes->post('news', [News::class, 'create']);
$routes->get('news/(:segment)', [News::class, 'show']);

$routes->get('/pages', [Page::class, 'index']);
$routes->get('(:segment)', [Page::class, 'view']);
