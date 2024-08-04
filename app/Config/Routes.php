<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
/**
 * @var RouteCollection $routes Auth
 */
$routes->get('/signin', 'Auth::signin');
$routes->get('/signup', 'Auth::signup');
$routes->get('/payonlineusingregno', 'Auth::payonlineusingregno');
$routes->get('/checkpaymentstatus', 'Auth::checkpaymentstatus');

$routes->set404Override(function( $message = null )
{
    $data = [
        'title' => '404 - Page not found',
        'message' => $message,
    ];
    echo view('frontend/layout/header')
    . view('frontend/layout/menu')
    . view('frontend/auth/pagenotfound', $data)
    . view('frontend/layout/footer');
});