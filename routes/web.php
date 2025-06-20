<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeecontroller;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    // Employee Management
    Route::get('employee', [\App\Http\Controllers\employeecontroller::class, 'index'])->name('employee.index');
    Route::get('employee/create', [\App\Http\Controllers\employeecontroller::class, 'create'])->name('employee.create');
    Route::post('employee/store', [\App\Http\Controllers\employeecontroller::class, 'store'])->name('employee.store');
    //end of employee management

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    Route::get('employee/$id/edit', [\App\Http\Controllers\employeecontroller::class, 'edit'])->name('employee.edit');
    Route::put('employee/$id/update', [\App\Http\Controllers\employeecontroller::class, 'update'])->name('employee.update');
    Route::get('employee/$id/delete', [\App\Http\Controllers\employeecontroller::class, 'destroy'])->name('employee.delete');
});
