<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CoursesController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// login route
Route::post('login', [AuthController::class, 'login']);
Route::get('courses', [CoursesController::class, 'courses'])->middleware('auth:api');
