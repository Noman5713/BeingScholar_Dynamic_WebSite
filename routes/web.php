<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/courses', [App\Http\Controllers\CourseController::class, 'index']);

Route::get('/course/{id}', [App\Http\Controllers\CourseController::class, 'show']);

// Enhanced Transaction Routes using Controller
Route::post('/verify-transaction', [TransactionController::class, 'verifyTransaction']);
Route::post('/submit-transaction', [TransactionController::class, 'submitTransaction']);
Route::get('/transaction-status/{trxn_id}', [TransactionController::class, 'getTransactionStatus']);

Route::get('/enroll/{id}', function ($id) {
    $course = App\Models\Course::findOrFail($id);
    return view('enroll', compact('course'));
});
   
Route::get('/mycourses', function () {
    return view('myCourses');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/admin/', function () {
    return view('/admin/login');
});


Route::prefix('admin')->group(function () {
    Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('admin.login.post');
    Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('admin.logout');
    
    Route::middleware(['admin'])->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');
        
        // Course Management Routes
        Route::get('/manage-courses', [App\Http\Controllers\AdminController::class, 'manageCourses'])->name('admin.courses');
        Route::get('/courses/create', [App\Http\Controllers\AdminController::class, 'createCourse'])->name('admin.courses.create');
        Route::post('/courses', [App\Http\Controllers\AdminController::class, 'storeCourse'])->name('admin.courses.store');
        Route::get('/courses/{course}/edit', [App\Http\Controllers\AdminController::class, 'editCourse'])->name('admin.courses.edit');
        Route::put('/courses/{course}', [App\Http\Controllers\AdminController::class, 'updateCourse'])->name('admin.courses.update');
        Route::delete('/courses/{course}', [App\Http\Controllers\AdminController::class, 'deleteCourse'])->name('admin.courses.delete');
        
        // User Management Routes
        Route::get('/users', [App\Http\Controllers\AdminController::class, 'manageUsers'])->name('admin.users');
        Route::get('/users/{user}/edit', [App\Http\Controllers\AdminController::class, 'editUser'])->name('admin.users.edit');
        Route::put('/users/{user}', [App\Http\Controllers\AdminController::class, 'updateUser'])->name('admin.users.update');
        Route::delete('/users/{user}', [App\Http\Controllers\AdminController::class, 'deleteUser'])->name('admin.users.delete');
        
        Route::get('/mycourses', [App\Http\Controllers\AdminController::class, 'myCourses'])->name('admin.mycourses');
    });
});

// Student Authentication Routes
Route::get('/register', [App\Http\Controllers\StudentAuthController::class, 'showRegisterForm'])->name('student.register.form');
Route::post('/register', [App\Http\Controllers\StudentAuthController::class, 'register'])->name('student.register');
Route::get('/signup', function() { return redirect('/register'); });

Route::get('/login', [App\Http\Controllers\StudentAuthController::class, 'showLoginForm'])->name('student.login.form');
Route::post('/login', [App\Http\Controllers\StudentAuthController::class, 'login'])->name('student.login');
Route::post('/logout', [App\Http\Controllers\StudentAuthController::class, 'logout'])->name('student.logout');

Route::get('/verify-otp', [App\Http\Controllers\StudentAuthController::class, 'showVerifyOtpForm'])->name('student.verify-otp.form');
Route::post('/verify-otp', [App\Http\Controllers\StudentAuthController::class, 'verifyOtp'])->name('student.verify-otp');

Route::get('/forgot-password', [App\Http\Controllers\StudentAuthController::class, 'showForgotPasswordForm'])->name('student.forgot-password.form');
Route::post('/forgot-password', [App\Http\Controllers\StudentAuthController::class, 'sendResetLink'])->name('student.forgot-password.send');
Route::get('/reset-password/{token}', [App\Http\Controllers\StudentAuthController::class, 'showResetPasswordForm'])->name('student.reset-password.form');
Route::post('/reset-password', [App\Http\Controllers\StudentAuthController::class, 'resetPassword'])->name('student.reset-password');

// Protected Student Routes
Route::middleware(['student'])->group(function () {
    Route::get('/studentdashboard', function () {
        return view('studentdashboard');
    })->name('student.dashboard');
    
    Route::get('/mycourses', function () {
        return view('myCourses');
    })->name('student.mycourses');
    
    Route::get('/courseContent', function () {
        return view('courseContent');
    })->name('student.course-content');
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

Route::get('/teachers', function () {
    return view('teachers');
});

// Success stories routes
use App\Http\Controllers\SuccessStoryController;

Route::get('/success', [SuccessStoryController::class, 'index'])->name('success.index');
Route::post('/submit-success', [SuccessStoryController::class, 'store'])->name('success.store');
