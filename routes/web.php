<?php

Route::group(['middleware' => 'web'], function ($router) {
    $router->get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    $router->get('/home', 'HomeController@index');

});
