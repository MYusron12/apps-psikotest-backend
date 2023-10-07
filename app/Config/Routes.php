<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('api', ['filter' => 'cors'], function($routes){
    $routes->post('register', 'Auth::register');
    $routes->post('login', 'Auth::login');
    $routes->get('users', 'Users::index');
    $routes->get('disc-question-test', 'Disc::discQuestionTest');
    $routes->post('disc-answer', 'Disc::discAnswer');
    $routes->get('user-menu', 'MenuManagement::userMenu');
});