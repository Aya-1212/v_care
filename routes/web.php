<?php

use App\Http\Controllers\Site\AppointmentController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\DoctorController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\MajorController;
use App\Models\Major;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// enjoy
Route::middleware('auth')->group(function () {
    Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
    Route::get('/doctors/{doctor}/appointments', [AppointmentController::class, 'show'])->name('doctors.appointments');
    Route::post('/appointments/add', action: [AppointmentController::class, 'store'])->name('appointments.store');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/majors', [MajorController::class, 'index'])->name('majors.all');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
//
Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.all');
Route::get('/doctors/{doctor}/profile', [DoctorController::class, 'profile'])->name('doctors.profile');
Route::get('/majors/{major}/doctors', [DoctorController::class, 'show'])->name('majors.doctors');


require_once('admin.php');
require_once('auth.php');
require_once __DIR__.('/api.php');