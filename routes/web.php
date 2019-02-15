<?php

Auth::routes();

Route::get('/', 'PageController@index')->name('index');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/pages/{slug}', 'PageController@page')->name('page');
