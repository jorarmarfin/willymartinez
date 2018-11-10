<?php

Route::get('/', 'HomeController@index')->name('index.home');
Route::get('/productos', 'HomeController@productos')->name('productos');
Route::get('/biografia', 'HomeController@biografia')->name('biografia');
Route::get('/eventos', 'HomeController@eventos')->name('eventos');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/contactame', 'HomeController@contactame')->name('contactame');
