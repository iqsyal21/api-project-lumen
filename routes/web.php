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

$router->post('api/register', ['uses' => 'LoginController@register']);

$router->post('api/login', ['uses' => 'LoginController@login']);


$router->group( ['prefix' => 'api', 'middleware' => 'auth'], function() use ($router) {

    $router->get('laporan/user/{id}', ['uses' => 'LaporanController@indexUser']);

    $router->get('laporan', ['uses' => 'LaporanController@index']);

    $router->get('laporan/{id}', ['uses' => 'LaporanController@show']);

    $router->delete('laporan/{id}', ['uses' => 'LaporanController@destroy']);

    $router->put('laporan/{id}', ['uses' => 'LaporanController@update']);

    $router->post('laporan', ['uses' => 'LaporanController@create']);
});