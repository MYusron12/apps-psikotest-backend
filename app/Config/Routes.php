<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('api', function($routes){
    $routes->post('register', 'Auth::register');
    $routes->post('login', 'Auth::login');
    $routes->get('users', 'Users::index', ['filter' => 'authFilter']);
    // $routes->get('disc-question-test', 'Disc::questionTest', 
    // ['filter' => 'authFilter']);
});
$routes->get('disc-question-test', 'Disc::questionTest');