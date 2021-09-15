<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;

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

/* Auth Router for all users */
//Auth::routes();
require __DIR__ . '/authRouter.php';

/* Admin Router */
require __DIR__ . '/adminRouter.php';

// Routing for website front end
Route::get('/clear-cache-config', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    dd("ok");
});
Route::GET('/', 'WebController@landing')->name('index');

// routes for all employer, admin and user
Route::middleware(['access-control:user|employer|admin'])->group(function () {
    Route::get('/welcome', 'HomeController@index')->name('home');
});

// routes for user
Route::middleware(['access-control:user'])->group(function () {
    Route::get('/user/welcome', 'User\WelcomeController@index')->name('user.welcome');
});

// routes for employer
Route::middleware(['access-control:employer'])->group(function () {
    Route::get('/employer/welcome', 'Employer\WelcomeController@index')->name('employer.welcome');
});
