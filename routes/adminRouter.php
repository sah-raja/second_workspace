<?php

use Illuminate\Support\Facades\Route;

Route::get('/sikaruApanel/welcome', 'HomeController@index')->name('home');

//Job Details
Route::middleware(['access-control:user'])->group(function () {
    Route::resource('job-details', 'Admin\JobDetails_Controller');
});
Route::GET('/job_view', 'Admin\JobDetails_Controller@job_view')->name('job.view');
Route::GET('/{id}/job_edit',  'Admin\JobDetails_Controller@job_edit')->name('job.edit');
Route::POST('/{id}/job_details_update',  'Admin\JobDetails_Controller@job_details_update')->name('job.update');
Route::GET('/{id}/job_delete',  'Admin\JobDetails_Controller@job_delete')->name('job.delete');

//Company Details
Route::resource('/company_details', Admin\Company_Controller::class);
Route::GET('/company_view',  [Admin\Company_Controller::class, 'company_view']);
Route::GET('/{id}/company_edit',  [Admin\Company_Controller::class, 'company_edit']);
Route::POST('/{id}/company_details_update',  [Admin\Company_Controller::class, 'company_details_update']);
Route::GET('/{id}/company_delete',  [Admin\Company_Controller::class, 'company_delete']);
