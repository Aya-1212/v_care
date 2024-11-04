<?php

use App\Http\Controllers\Site\AppointmentController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\DoctorController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\MajorController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/majors',[ MajorController::class, 'index'])->name('majors.index');
Route::get('/contact',[ ContactController::class ,'index'])->name('contact.index');
Route::view('history', 'site.pages.history')->name('history');
Route::view('login', 'site.pages.login')->name('login');
Route::view('register', 'site.pages.register')->name('register');
Route::get('/doctors',[DoctorController::class ,'index'])->name('doctors.index');
Route::get('/appointment', [ AppointmentController::class ,'index'])->name('appointments.index');
