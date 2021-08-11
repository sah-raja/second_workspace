<?php

use Illuminate\Support\Facades\Route;

Route::get('/sikaruApanel/welcome', 'HomeController@index')->name('home');


Route::middleware(['access-control:admin'])->group(function () {
    //Job Details
    Route::resource('/sikaruApanel/job-details', 'Admin\JobDetailsController');
    Route::GET('/sikaruApanel/job_view', 'Admin\JobDetailsController@job_view')->name('job.view');
    Route::GET('/sikaruApanel/{id}/job_edit',  'Admin\JobDetailsController@job_edit')->name('job.edit');
    Route::POST('/sikaruApanel/{id}/job_details_update',  'Admin\JobDetailsController@job_details_update')->name('job.update');
    Route::GET('/sikaruApanel/{id}/job_delete',  'Admin\JobDetailsController@job_delete')->name('job.delete');

    //Company Details
    Route::resource('/sikaruApanel/company-details', 'Admin\CompanyController');
    Route::GET('/sikaruApanel/company_view','Admin\CompanyController@company_view')->name('company.view');
    Route::GET('/sikaruApanel/{id}/company_edit',  'Admin\CompanyController@company_edit')->name('company.edit');
    Route::POST('/sikaruApanel/{id}/company_details_update',  'Admin\CompanyController@company_details_update')->name('company.update');
    Route::GET('/sikaruApanel/{id}/company_delete',  'Admin\CompanyController@company_delete')->name('company.delete');

    
});
