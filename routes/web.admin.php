<?php

$router->group(['prefix' => 'admin', 'namespace' => 'Admin'], function () use ($router){
    $router->get('/dashboard', 'DashboardController@index');
    $router->resource('categories', 'Categories\CategoriesController');
});
