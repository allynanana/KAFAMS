<?php

use App\Http\Controllers\ManageReportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KAFAActivityController;


Route::get('/', function () {
    return view('layout');
});


Route::resource('/ManageKafaActivity/admins', KAFAActivityController::class);
Route::get('/ManageReport/Admin', [ManageReportController::class, 'AdminHomepage']);


