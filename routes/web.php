<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::view('majors', 'web.site.pages.majors')->name('majors');
Route::view('home', 'web.site.pages.home')->name('home');
Route::view('contact','web.site.pages.contact')->name('contact');
Route::view('history','web.site.pages.history')->name('history');
Route::view('login','web.site.pages.login')->name('login');
Route::view('register','web.site.pages.register')->name('register');
Route::view('doctors','web.site.pages.doctors.index')->name('doctors.index');
Route::view('appointment','web.site.pages.doctors.doctor')->name('doctors.doctor');
