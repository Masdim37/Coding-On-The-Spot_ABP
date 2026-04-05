<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'menu::index');
$routes->get('/menu/get_data_json', 'menu::get_data_json');
$routes->get('/menu/create', 'menu::create');
$routes->post('/menu/store', 'menu::store');
$routes->get('/menu/edit/(:num)', 'menu::edit/$1');
$routes->post('/menu/update/(:num)', 'menu::update/$1');
$routes->delete('/menu/delete/(:num)', 'menu::delete/$1');
