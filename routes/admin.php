<?php

Route::resource('pages', 'PageController');

Route::get('/', 'AdminController@index')->name('index');
