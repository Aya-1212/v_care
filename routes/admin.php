<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MajorController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PatientController;

// 

Route::prefix('/admin')->group(
    function () {
        Route::get('/home', [HomeController::class, 'index'])->name('admin.home');
        //Major
        Route::get('majors', [MajorController::class, 'index'])->name('majors.index');
        Route::get('/majors/add', [MajorController::class, 'create'])->name('majors.create');
        Route::post('/majors', [MajorController::class, 'store'])->name('majors.store');
        Route::get('/majors/{major}/edit', [MajorController::class, 'edit'])->name('majors.edit');
        Route::put('/majors/{major}', [MajorController::class, 'update'])->name('majors.update');
        Route::delete('majors/{major}', [MajorController::class, 'destroy'])->name('majors.destroy');
        //Doctor
        Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index');
        Route::get('doctors/add', [DoctorController::class, 'create'])->name('doctors.create');
        Route::post('/doctors', [DoctorController::class, 'store'])->name('doctors.store');
        Route::get('/doctors/{doctor}/edit', [DoctorController::class, 'edit'])->name('doctors.edit');
        Route::put('/doctors/{doctor}', [DoctorController::class, 'update'])->name('doctors.update');
        Route::delete('/doctors/{doctor}', [DoctorController::class, 'destroy'])->name('doctors.destroy');
        //Patient
        Route::get('/users', [PatientController::class, 'index'])->name('users.index');
        Route::get('/users/add', [PatientController::class, 'create'])->name('users.create');
        Route::post('/users', [PatientController::class, 'store'])->name('users.store');
        Route::get('/users/{user}/edit',[PatientController::class,'edit'])->name('users.edit');
        Route::put('/users/{user}', [PatientController::class, 'update'])->name('users.update');
        Route::delete('/users/{user}', [PatientController::class, 'destroy'])->name('users.destroy');
        //Message
        Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
        Route::delete('/messages/{message}', [MessageController::class, 'destroy'])->name('messages.destroy');
    }
);
