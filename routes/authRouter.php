<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Authentication Routes for users
|--------------------------------------------------------------------------
|
| Authentication Routes for multiple users prepared by Jes Pratap Shakya
|
*/

/* Routes for admin dashboard */
Route::get('/sikaruApanel/login', 'Auth\LoginController@showLoginForm')->name('login.admin');
Route::post('/sikaruApanel/login', 'Auth\LoginController@loginRole')->name('login.admin');
Route::get('/sikaruApanel/password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password/confirm.admin');
Route::post('/sikaruApanel/password/confirm', 'Auth\ConfirmPasswordController@confirm')->name('password/confirm.admin');
Route::post('/sikaruApanel/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password/email.admin');
Route::get('/sikaruApanel/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password/reset.admin');
Route::post('/sikaruApanel/password/reset', 'Auth\ResetPasswordController@reset')->name('password/reset.admin');
Route::get('/sikaruApanel/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password/reset/{token}.admin');
Route::get('/sikaruApanel/register', 'Auth\RegisterController@showRegistrationForm')->name('register.admin');

/* Routes for employer dashboard */
Route::get('/employer/login', 'Auth\LoginController@showLoginForm')->name('login.employer');
Route::post('/employer/login', 'Auth\LoginController@loginRole')->name('login.employer');
Route::get('/employer/password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password/confirm.employer');
Route::post('/employer/password/confirm', 'Auth\ConfirmPasswordController@confirm')->name('password/confirm.employer');
Route::post('/employer/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password/email.employer');
Route::get('/employer/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password/reset.employer');
Route::post('/employer/password/reset', 'Auth\ResetPasswordController@reset')->name('password/reset.employer');
Route::get('/employer/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password/reset/{token}.employer');
Route::get('/employer/register', 'Auth\RegisterController@showRegistrationForm')->name('register.employer');

/* Routes for job seeker dashboard */
Route::get('/user/login', 'Auth\LoginController@showLoginForm')->name('login.user');
Route::post('/user/login', 'Auth\LoginController@loginRole')->name('login.user');
Route::get('/user/password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password/confirm.user');
Route::post('/user/password/confirm', 'Auth\ConfirmPasswordController@confirm')->name('password/confirm.user');
Route::post('/user/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password/email.user');
Route::get('/user/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password/reset.user');
Route::post('/user/password/reset', 'Auth\ResetPasswordController@reset')->name('password/reset.user');
Route::get('/user/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password/reset/{token}.user');
Route::get('/user/register', 'Auth\RegisterController@showRegistrationForm')->name('register.user');

/* Routes for logout */
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
