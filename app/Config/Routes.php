<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Books::index');

$routes->get('/books', 'Books::index');
$routes->get('/books/new', 'Books::new');
$routes->post('/books', 'Books::create');
