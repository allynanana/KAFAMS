<?php

use App\Http\Controllers\ManageReportController;
use Illuminate\Support\Facades\Route;

Route::get('/ManageReport/Admin', [ManageReportController::class, 'AdminHomepage']);


