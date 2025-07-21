<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/mycourses', function () {
    return view('myCourses');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::get('/admin/manage-courses', function () {
    return view('admin.manage-courses');
});

Route::get('/admin/users', function () {
    return view('admin.manage-users');
});

Route::get('/admin/mycourses', function () {
    return view('admin.mycourses');
});

Route::get('/certificate', function () {
    return view('certificate');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/studentdashboard', function () {
    return view('studentdashboard');
});
