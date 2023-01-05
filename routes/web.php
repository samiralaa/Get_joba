<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobRequestController;
use App\Http\Controllers\CampanyController;
use App\Http\Controllers\GuestPagesController;

// Welcome page
Route::get('/', [GuestPagesController::class, 'welcome'])->name('welcome');


// Show job application form and register user after submitting it, upload photo & signature.


// Login, Logout, Forget, etc Default UI Functionalities
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');

// Admin backend, create job forms, verify payments, manage users, and other administrative tasks
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    // Route::resource('forms', FormController::class);
    // Route::resource('users', UserController::class);
    // Route::resource('applications', ApplicationController::class);
    // Route::resource('payments', PaymentController::class);
});


Route::get('/category',[CategoryController::class,'index'])->name('category');
Route::get('/jobs',[JobController::class,'index'])->name('jobs');
Route::get('/jobs/craete',[JobController::class,'create'])->name('jobs.create');
Route::post('/jobs/store',[JobController::class,'store'])->name('jobs.store');
Route::get('/jobs/show/{id}',[JobController::class,'show'])->name('jobs.show');




Route::get('/request',[JobRequestController::class,'index'])->name('request');
Route::get('/request/craete/{id}',[JobRequestController::class,'create'])->name('request.create');
Route::post('/request/store/{id}',[JobRequestController::class,'store'])->name('request.store');

Route::post('/request/store/{id}',[JobRequestController::class,'store'])->name('request.store');



