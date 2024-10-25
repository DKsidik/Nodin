<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::login');
$routes->get('home', 'Home::index');
$routes->get('home/surat', 'Home::surat');
$routes->get('home/buat', 'Home::buat');
