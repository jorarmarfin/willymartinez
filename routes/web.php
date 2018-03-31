<?php

Route::get('/','HomeController@index')->name('home.index');
Route::post('contactame','HomeController@sendemail')->name('contactame');