<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin','AdminController@login');
Route::get('/admin/dashboard','AdminController@dashboard');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
