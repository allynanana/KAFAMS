<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KafaActivityController;
use App\Http\Controllers\KafaActivityController1;
use App\Http\Controllers\KafaActivityController2;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('ManageRegistration/Login');
});

Route::get('/signup', function () {
    return view('ManageRegistration/SignUp');
});

Route::get('/forgotpassword', function () {
    return view('ManageRegistration/ForgotPassword');
});

Route::get('/', function () {
    return view('layout');
});

Route::resource('/ManageKafaActivity/admins', KafaActivityController::class);
Route::resource('/ManageKafaActivity/teachers', KafaActivityController1::class);
Route::get('/search', [KafaActivityController::class,'search']);
Route::get('/search1', [KafaActivityController1::class,'search']);
Route::resource('/ManageKafaActivity/parents', KafaActivityController2::class);
Route::get('/ManageKafaActivity/parents/viewbooking', [KafaActivityController2::class, 'viewBooking'])->name('parents.viewBooking');
Route::get('/ManageKafaActivity/parents/{id}/book', [KafaActivityController2::class, 'book'])->name('parents.book');
Route::get('/ManageKafaActivity/parents/{id}/cancel', [KafaActivityController2::class, 'cancel'])->name('parents.cancel');
Route::put('/ManageKafaActivity/parents/{id}/toggle', [KafaActivityController::class, 'toggleHide'])->name('activity.toggle');