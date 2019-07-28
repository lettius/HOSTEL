<?php


Route::get('/', function () {
    
});

Route::get('/admin','AdminController@login');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
