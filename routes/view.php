<?php

Route::group(
    [
        'namespace' => 'TMS\WI\Controllers',
        'middleware' => ['web']
    ],
    function() {
        Route::get('/', function() {
            return Redirect::to('home');
        });
        Route::get('/home', 'HomeController@index')->name('home');
    });
