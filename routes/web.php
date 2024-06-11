<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KafaActivityController; // Controller for managing KAFA activities(admin)
use App\Http\Controllers\KafaActivityController1; // Controller for managing KAFA activities(teacher)
use App\Http\Controllers\KafaActivityController2; // Controller for managing KAFA activities(parent)

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

// Define resource routes for admins management
Route::resource('/ManageKafaActivity/admins', KafaActivityController::class);
// Define resource routes for teachers management
Route::resource('/ManageKafaActivity/teachers', KafaActivityController1::class);
// Define a route for searching activities in the admin section
Route::get('/search', [KafaActivityController::class, 'search']);
// Define a route for searching activities in the teachers section
Route::get('/search1', [KafaActivityController1::class, 'search']);
// Define resource routes for parents management
Route::resource('/ManageKafaActivity/parents', KafaActivityController2::class);
// Define a route for viewing bookings for parents
Route::get('/ManageKafaActivity/parents/viewbooking', [KafaActivityController2::class, 'viewBooking'])->name('parents.viewBooking');
// Define a route for booking an activity for parents
Route::get('/ManageKafaActivity/parents/{id}/book', [KafaActivityController2::class, 'book'])->name('parents.book');
// Define a route for canceling a booking for parents
Route::get('/ManageKafaActivity/parents/{id}/cancel', [KafaActivityController2::class, 'cancel'])->name('parents.cancel');
// Define a route for toggling activity visibility (hide/unhide)
Route::put('/ManageKafaActivity/parents/{id}/toggle', [KafaActivityController::class, 'toggleHide'])->name('activity.toggle');
