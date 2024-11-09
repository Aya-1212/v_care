<?php

use App\Http\Controllers\Admin\MajorController;

// Route::get('/majors/add',[ MajorController::class , 'create' ])->name('majors.create');
// 
Route::post('/majors',[ MajorController::class , 'store'])->name('majors.store');
