<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController\AuthController;

Route::name('user.')->middleware('guest')->group(function () {

    Route::view('/login', 'user.auth.login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::view('/register', 'user.auth.register')->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/forgot_password', [AuthController::class, 'forgot_password'])->name('forgot_password');
});

Route::name('user.')->middleware('auth')->group(function () {

    Route::view('/dashboard', 'user.dashboard')->name('dashboard');

    Route::get('my_subjects', function(){
        return view('user.my_subjects');
    })->name('my_subjects');

    Route::get('my_schedule', function(){
        return view('user.my_schedule');
    })->name('my_schedule');

    Route::get('my_checklist', function(){
        return view('user.my_checklist');
    })->name('my_checklist');

    Route::get('my_registration_form', function(){
        return view('user.my_registration_form');
    })->name('my_registration_form');

    Route::get('school_calendar', function(){
        return view('user.school_calendar');
    })->name('school_calendar');

    Route::get('exam_schedule', function(){
        return view('user.exam_schedule');
    })->name('exam_schedule');

    Route::get('bulletin_board', function(){
        return view('user.bulletin_board');
    })->name('bulletin_board');

    Route::get('subject_materials', function(){
        return view('user.subject_materials');
    })->name('subject_materials');

    Route::get('my_profile', function(){
        return view('user.my_profile');
    })->name('my_profile');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

});