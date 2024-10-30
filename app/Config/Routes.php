<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->setDefaultNamespace('App/Controllers');
$routes->setDefaultController('Auth');
$routes->setDefaultMethod('register');
$routes->setAutoRoute(true);


$routes->get('/', 'Auth::register');
$routes->get('login', 'Home::login');
$routes->get('home', 'Home::index');
$routes->get('home/surat', 'Home::surat');
$routes->get('home/buat', 'Home::buat');
