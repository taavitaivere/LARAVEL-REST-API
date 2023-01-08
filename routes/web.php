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

$router->get('/persons', 'PersonController@index');
$router->get('/persons/{id}', 'PersonController@show');
$router->post('/persons', 'PersonController@create');
$router->put('/persons/{id}', 'PersonController@update');
$router->delete('/persons/{id}', 'PersonController@delete');
