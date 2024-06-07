<?php

use App\Http\Controllers\ManageReportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KAFAActivityController;


Route::get('/', function () {
    return view('layout');
});


//Route::resource('/ManageKafaActivity/admins', KAFAActivityController::class);
Route::get('/ManageReport', [ManageReportController::class, 'AdminHomepage']);
Route::get('/ManageReport/Admin/Activity', [ManageReportController::class, 'AdminActivityReport']);
Route::get('/ManageReport/Admin/Activity', [ManageReportController::class, 'AdminActivityReportFull']);
Route::get('/ManageReport/Admin/User', [ManageReportController::class, 'AdminUserReport']);



