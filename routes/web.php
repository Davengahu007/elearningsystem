<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

Route::get('/home', function (){
    return view('home');
})->name('home');

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');


Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);


Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'store']);

Route::get('/logout',[LogoutController::class, 'store'])->name('logout');

Route::get('/posts', function () {
return view('posts.index');
});

?>