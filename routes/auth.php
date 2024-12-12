<?php

use App\Http\Controllers\Auth\AuthController;

Route::middleware('guest')->group(
    function () {
        Route::get(
            '/login',
            [AuthController::class, 'login']
        )->name('login');
        Route::get(
            '/register',
            [AuthController::class, 'register']
        )->name('auth.register');
        Route::post(
            '/register-user',
            [AuthController::class, 'submitRegister']
        )->name('auth.store');
        Route::post(
            '/login-user',
            [AuthController::class, 'submitLogin']
        )->name('auth.submit.login');
    }
);

Route::middleware('auth')->group(
    function () {
        Route::delete(
            '/logout',
            [AuthController::class, 'logout']
        )->name('auth.logout');
    }
);

