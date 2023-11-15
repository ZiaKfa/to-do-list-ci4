<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/task', 'TaskController::index');
$routes->get('/addTask', 'TaskController::create');
$routes->post('/storeTask', 'TaskController::store');
$routes->get('/editTask/(:num)', 'TaskController::edit/$1');
$routes->post('/updateTask', 'TaskController::update');
$routes->get('/deleteTask/(:num)', 'TaskController::delete/$1');
$routes->get('/user', 'UserController::index');
$routes->get('/addUser', 'UserController::create');
$routes->post('/storeUser', 'UserController::store');
$routes->get('/editUser/(:num)','UserController::edit/$1');
$routes->post('/updateUser', 'UserController::update');
$routes->get('/deleteUser/(:num)','UserController::delete/$1');