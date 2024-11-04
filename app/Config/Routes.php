<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->setDefaultNamespace('App/Controllers');
$routes->setDefaultController('Auth');
$routes->setDefaultMethod('login');
$routes->setAutoRoute(true);


$routes->get('/', 'Auth::login');
$routes->get('register', 'Auth::register');
$routes->get('home', 'Home::index');
$routes->get('home/surat', 'surat::surat');
$routes->get('surat/infosurat', 'Surat::infosurat');

// $routes->get('home/buat', 'Home::buat');
