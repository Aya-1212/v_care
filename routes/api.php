<?php

use App\Http\Controllers\Api\V1\AuthController;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\V1\ContactController;
use App\Http\Controllers\Api\V1\DoctorController;
use App\Http\Controllers\Api\V1\MajorController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//
Route::get('v1/majors', [MajorController::class, 'index']);
Route::get('v1/majors/{id}', [MajorController::class, 'show']);
Route::get('v1/majors/{id}/doctors', [MajorController::class, 'showDoctors']);
//
Route::get('v1/doctors',[DoctorController::class,'index']);
Route::get('v1/doctors/{id}',[DoctorController::class,'show']);
//
Route::post('v1/contact',[ContactController::class,'store']);
//
Route::post('v1/register',[AuthController::class ,'register']);
Route::post('v1/login',[AuthController::class ,'login']);
Route::middleware('auth:sanctum')->post('v1/logout', [AuthController::class ,'logout']);