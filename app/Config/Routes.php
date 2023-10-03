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
