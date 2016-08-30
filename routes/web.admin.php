<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::resource('categories', 'Categories\CategoriesController');
});
