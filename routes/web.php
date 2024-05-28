<?php

use Illuminate\Support\Facades\Route;

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