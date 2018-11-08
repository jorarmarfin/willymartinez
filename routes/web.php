<?php

Route::get('/', 'HomeController@index')->name('index.home');
Route::get('/productos', 'HomeController@productos')->name('productos');
