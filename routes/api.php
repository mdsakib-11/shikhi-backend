<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CoursesController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Public Route
Route::post('login', [AuthController::class, 'login']);
Route::get('courses', [CoursesController::class, 'courses']);
Route::get('course/{slug}', [CoursesController::class, 'singleCourse']);
// Secure Route
Route::middleware('auth:api')->group(function () {
    Route::get('lessons', [CoursesController::class, 'lessons']);
});

