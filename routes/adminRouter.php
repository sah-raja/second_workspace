<?php

use Illuminate\Support\Facades\Route;

Route::get('/sikaruApanel/welcome', 'HomeController@index')->name('home');