<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
date_default_timezone_set('Asia/Jakarta');

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'student'], function() use ($router) {
    $router->post('/olimpiad-registration', 'StudentController@olimpiadRegistration');
});
