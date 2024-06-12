<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KafaActivityController; // Controller for managing KAFA activities(admin)
use App\Http\Controllers\KafaActivityController1; // Controller for managing KAFA activities(teacher)
use App\Http\Controllers\KafaActivityController2; // Controller for managing KAFA activities(parent)

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard1', function () {
    return view('dashboard1');
})->middleware(['auth', 'verified'])->name('dashboard1');

Route::get('/dashboard2', function () {
    return view('dashboard2');
})->middleware(['auth', 'verified'])->name('dashboard2');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Resource routes for KAFA activities


Route::resource('/ManageKafaActivity/admins', KafaActivityController::class);
Route::resource('/ManageKafaActivity/teachers', KafaActivityController1::class);
Route::resource('/ManageKafaActivity/parents', KafaActivityController2::class);
Route::get('/ManageKafaActivity/parents/viewbooking', [KafaActivityController2::class, 'viewBooking'])->name('parents.viewBooking');
Route::get('/ManageKafaActivity/parents/{id}/book', [KafaActivityController2::class, 'book'])->name('parents.book');
Route::get('/ManageKafaActivity/parents/{id}/cancel', [KafaActivityController2::class, 'cancel'])->name('parents.cancel');
Route::put('/ManageKafaActivity/parents/{id}/toggle', [KafaActivityController::class, 'toggleHide'])->name('activity.toggle');
Route::get('/parents/create', [KafaActivityController2::class, 'create'])->name('parents.create');
Route::get('ManageKafaActivity/parents/{id}', [KafaActivityController2::class, 'showStudent'])->name('parents.show');


Route::get('/ManageReport', [ManageReportController::class, 'AdminHomepage']);
Route::get('/ManageReport/Admin/ActivityReport', [ManageReportController::class, 'AdminActivityReport']);
Route::get('/ManageReport/Admin/UserReport', [ManageReportController::class, 'AdminUserReport']);

Route::get('/ManageReport/MUIP/UserReport', [ManageReportController::class, 'MUIPUserReport']);
Route::get('/ManageReport/MUIP/ActivityReport', [ManageReportController::class, 'MUIPActivityReport']);


require __DIR__.'/auth.php';





