<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/mycourses', function () {
    return view('myCourses');
});

Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::prefix('admin')->group(function () {
    Route::view('/dashboard', 'admin.dashboard')->name('admin.dashboard');
    Route::view('/users', 'admin.manage-users')->name('admin.users');
    Route::patch('/users/{user}/update-role', [App\Http\Controllers\AdminController::class, 'updateUserRole'])->name('admin.users.update-role');
    Route::view('/manage-courses', 'admin.manage-courses')->name('admin.manage-courses');
    Route::view('/mycourses', 'admin.mycourses')->name('admin.mycourses');
    Route::view('/login', 'admin.login')->name('admin.login');
});
