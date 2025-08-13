<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// $routes->addRedirect('/', 'home');
$routes->get('kerja', 'Kerja::index');
