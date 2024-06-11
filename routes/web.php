<?php

use App\Http\Controllers\ManageReportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KAFAActivityController;


Route::get('/', function () {
    return view('layout');
});


//Route::resource('/ManageKafaActivity/admins', KAFAActivityController::class);
Route::get('/ManageReport', [ManageReportController::class, 'AdminHomepage']);
Route::get('/ManageReport/Admin/ActivityReport', [ManageReportController::class, 'AdminActivityReport']);
Route::get('/ManageReport/Admin/UserReport', [ManageReportController::class, 'AdminUserReport']);

Route::get('/ManageReport/MUIP/UserReport', [ManageReportController::class, 'MUIPUserReport']);




