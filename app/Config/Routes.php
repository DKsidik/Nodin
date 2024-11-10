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
$routes->get('home/profile', 'Home::profile');
$routes->get('surat/cetak_surat', 'surat::cetak_surat');
$routes->get('surat/preview', 'Cetaksurat::preview');
$routes->get('home/infouser', 'Home::infouser');
$routes->get('home/profile_User/(:num)', 'Home::v_profile/$1');
$routes->get('home/edit_User/(:num)', 'Home::edit_akun/$1');
$routes->get('auth/edit_User/(:num)', 'Auth::edit_akun/$1');
// $routes->get('user/profile/(:num)', 'UserController::profile/$1');



// $routes->get('home/buat', 'Home::buat');