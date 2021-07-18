<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
|
*/

/* Auth Router for multiple users */
//Auth::routes();
require __DIR__.'/authRouter.php';

/* Admin Router */
require __DIR__.'/adminRouter.php';

Route::get('/', function () {
    return view('welcome');
});


//manual auth routing ends
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/welcome', 'HomeController@index')->name('user.welcome');
Route::get('/employer/welcome', 'HomeController@index')->name('employer.welcome');
Route::get('/admin/welcome', 'HomeController@index')->name('admin.welcome');
