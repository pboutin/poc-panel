<?php

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

$app->get('/', function () use ($app) {
    return view('app');
});

$app->group(['prefix' => 'api', 'namespace' => 'App\Http\Controllers'], function($app) {

    // Images
    $app->get('images', 'ImageController@index');

    // Flavors
    $app->get('flavors', 'FlavorController@index');

    // Servers
    $app->get('servers/{id}', 'ServerController@getById');
    $app->get('servers', 'ServerController@index');
    $app->put('servers/{id}', 'ServerController@update');
    $app->post('servers', 'ServerController@create');
    $app->delete('servers/{id}', 'ServerController@delete');
    $app->put('servers/{id}/power', 'ServerController@power');

});