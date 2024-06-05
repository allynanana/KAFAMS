<?php

use App\Http\Controllers\ManageReportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KAFAActivityController;

<<<<<<< HEAD

Route::get('/', function () {
    return view('layout');
});


Route::resource('/ManageKafaActivity/admins', KAFAActivityController::class);
Route::get('/ManageReport/Admin', [ManageReportController::class, 'AdminHomepage']);
=======
Route::get('/ManageReport', [ManageReportController::class, 'AdminHomepage']);
Route::get('/ManageReport/Admin', [ManageReportController::class, 'AdminActivityReport']);
>>>>>>> 533f73394c84ac21c4b8aca0ca80b60b9fe9546c


