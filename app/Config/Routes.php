<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/tentang', 'Home::tentang');
$routes->get('/tipe-rumah', 'Home::tipeRumah');
$routes->get('/galeri', 'Home::galeri');
$routes->get('/lokasi', 'Home::lokasi');
$routes->get('/kontak', 'Home::kontak');