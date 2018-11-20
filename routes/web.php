<?php

Route::get('/', 'HomeController@index')->name('index.home');
Route::get('/productos', 'HomeController@productos')->name('productos');
Route::get('/biografia', 'HomeController@biografia')->name('biografia');
Route::get('/eventos', 'HomeController@eventos')->name('eventos');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/contactame', 'HomeController@contactame')->name('contactame');
Route::post('email', 'HomeController@email')->name('email');
Route::get('producto/{nid}', 'HomeController@producto')->name('producto');
Route::get('canal-youtube', 'HomeController@canalyoutube')->name('youtube');
Route::post('pedido', 'HomeController@pedido')->name('pedido');
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Route::get('descargas', 'HomeController@descargas')->name('descargas');
Route::post('lista', 'HomeController@lista')->name('lista');
Route::get('template', 'HomeController@template')->name('template');
Route::get('archivo/{codigo}', 'HomeController@archivo')->name('archivo');
