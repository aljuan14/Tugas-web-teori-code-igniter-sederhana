<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
$routes->get('/', 'Pages::index');
$routes->get('/pages', 'Pages::index');

$routes->get('/komik/(:segment)', 'Komik::detail/$1');
