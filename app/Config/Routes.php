<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Define the default route
$routes->get('/', 'UserController::index');

// User routes
$routes->get('users', 'UserController::index');
$routes->get('users/create', 'UserController::create');
$routes->post('users', 'UserController::store');
$routes->get('users/(:num)', 'UserController::show/$1');
$routes->get('users/edit/(:num)', 'UserController::edit/$1');
$routes->post('users/update/(:num)', 'UserController::update/$1');
$routes->get('users/delete/(:num)', 'UserController::delete/$1');

// Supplier routes
$routes->get('suppliers', 'SupplierController::index');
$routes->get('suppliers/create', 'SupplierController::create');
$routes->post('suppliers', 'SupplierController::store');
$routes->get('suppliers/(:num)', 'SupplierController::show/$1');
$routes->get('suppliers/edit/(:num)', 'SupplierController::edit/$1');
$routes->post('suppliers/update/(:num)', 'SupplierController::update/$1');
$routes->get('suppliers/delete/(:num)', 'SupplierController::delete/$1');

// Employee routes
$routes->get('employees', 'EmployeeController::index');
$routes->get('employees/create', 'EmployeeController::create');
$routes->post('employees', 'EmployeeController::store');
$routes->get('employees/(:num)', 'EmployeeController::show/$1');
$routes->get('employees/edit/(:num)', 'EmployeeController::edit/$1');
$routes->post('employees/update/(:num)', 'EmployeeController::update/$1');
$routes->get('employees/delete/(:num)', 'EmployeeController::delete/$1');

// Payment routes
$routes->get('payments', 'PaymentController::index');
$routes->get('payments/create', 'PaymentController::create');
$routes->post('payments', 'PaymentController::store');
$routes->get('payments/(:num)', 'PaymentController::show/$1');
$routes->get('payments/edit/(:num)', 'PaymentController::edit/$1');
$routes->post('payments/update/(:num)', 'PaymentController::update/$1');
$routes->get('payments/delete/(:num)', 'PaymentController::delete/$1');

// Teacher routes
$routes->get('teachers', 'TeacherController::index');
$routes->get('teachers/create', 'TeacherController::create');
$routes->post('teachers', 'TeacherController::store');
$routes->get('teachers/(:num)', 'TeacherController::show/$1');
$routes->get('teachers/edit/(:num)', 'TeacherController::edit/$1');
$routes->post('teachers/update/(:num)', 'TeacherController::update/$1');
$routes->get('teachers/delete/(:num)', 'TeacherController::delete/$1');

// Class routes
$routes->get('classes', 'ClassController::index');
$routes->get('classes/create', 'ClassController::create');
$routes->post('classes', 'ClassController::store');
$routes->get('classes/(:num)', 'ClassController::show/$1');
$routes->get('classes/edit/(:num)', 'ClassController::edit/$1');
$routes->post('classes/update/(:num)', 'ClassController::update/$1');
$routes->get('classes/delete/(:num)', 'ClassController::delete/$1');