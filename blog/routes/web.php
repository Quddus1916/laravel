<?php

use Illuminate\Support\Facades\Route;

Route::get('/','HomeController@Home');
Route::get('/about','HomeController@About');
Route::get('/contact','HomeController@contact');