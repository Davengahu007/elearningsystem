<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Addcourses;
use App\Http\Controllers\AddCoursesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('login',[LoginController::class, 'store']);

// Route::post('register',[RegisterController::class, 'store']);

// Route::get('/courses', [AddCoursesController::class, 'viewcourse']);

// Route::post('/addcourses', [AddCoursesController::class, 'store']);

// // Route::delete('/dcourses/{id}', [AddCoursesController::class, 'destroy']);

// // Route::put('/ucourses/{id}', [AddCoursesController::class, 'update']);

// Route::apiResource('courses', AddCoursesController::class);