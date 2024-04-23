<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/test', 'TestController::index');

$routes->get('/agendamento', 'Agendamento::index');

$routes->get('/agendamento/(:num)', 'Agendamento::show/$1');

$routes->group('projects', function ($routes) {
    $routes->get('/', 'Projects::index');
});

