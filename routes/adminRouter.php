<?php

use Illuminate\Support\Facades\Route;

Route::get('/sikaruApanel/welcome', 'HomeController@index')->name('home');

//Job Details
Route::middleware(['access-control:admin'])->group(function () {
    Route::resource('/sikaruApanel/job-details', 'Admin\JobDetails_Controller');
    Route::GET('/sikaruApanel/job_view', 'Admin\JobDetails_Controller@job_view')->name('job.view');
    Route::GET('/sikaruApanel/{id}/job_edit',  'Admin\JobDetails_Controller@job_edit')->name('job.edit');
    Route::POST('/sikaruApanel/{id}/job_details_update',  'Admin\JobDetails_Controller@job_details_update')->name('job.update');
    Route::GET('/sikaruApanel/{id}/job_delete',  'Admin\JobDetails_Controller@job_delete')->name('job.delete');

    //Company Details
    Route::resource('/sikaruApanel/company-details', 'Admin\Company_Controller');
    Route::GET('/sikaruApanel/company_view','Admin\Company_Controller@company_view')->name('company.view');
    Route::GET('/sikaruApanel/{id}/company_edit',  'Admin\Company_Controller@company_edit')->name('company.edit');
    Route::POST('/sikaruApanel/{id}/company_details_update',  'Admin\Company_Controller@company_details_update')->name('company.update');
    Route::GET('/sikaruApanel/{id}/company_delete',  'Admin\Company_Controller@company_delete')->name('company.delete');

});
