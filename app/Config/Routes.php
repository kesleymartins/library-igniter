<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Books;
use App\Controllers\Authors;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Books::class, 'index']);

$routes->get('/books', [Books::class, 'index']);
$routes->get('/books/new', [Books::class, 'new']);
$routes->post('/books', [Books::class, 'create']);
$routes->get('/books/edit/(:num)', [Books::class, 'edit']);
$routes->post('/books/(:num)', [Books::class, 'update']);
$routes->get('/books/delete/(:num)', [Books::class, 'delete']);

$routes->get('/authors', [Authors::class, 'index']);
$routes->get('/authors/new', [Authors::class, 'new']);
$routes->post('/authors', [Authors::class, 'create']);
$routes->get('/authors/edit/(:num)', [Authors::class, 'edit']);
$routes->post('/authors/(:num)', [Authors::class, 'update']);
