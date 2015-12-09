<?php

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

$app->get('/{route:.+}', function () use ($app) {
    return view('app');
});
