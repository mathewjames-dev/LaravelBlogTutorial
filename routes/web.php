<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@index')
    ->name('home');

/*
 * Blog Resource Routing
 * Will utilise/need the following functions in the controller
 * index, store, create, show, update, destroy, edit
 */
Route::resource('/blog', 'BlogController');