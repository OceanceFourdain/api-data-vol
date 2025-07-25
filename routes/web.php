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

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => 'api/v1'], function () use ($router) {
    $router->get('/data-vol', ['uses' => 'DataVolController@show']);
    $router->get('/data-vol', ['uses' => 'DataVolController@index']);
    $router->put('/data-vol/{id}', ['uses' => 'DataVolController@edit']);
    $router->delete('/data-vol/{id}', ['uses' => 'DataVolController@delete']);
});
