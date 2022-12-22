<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\StdApplyController;
use App\Http\Controllers\WApplyController;
use App\Http\Controllers\AdminController;


Route::get('/', function (){
    return view('home');
})->name('home');


Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

Route::get('/StdApply',[StdApplyController::class, 'index'])->name('StdApply');
Route::post('/StdApply',[StdApplyController::class, 'store']);

Route::get('/StdApply',[StdApplyController::class, 'index'])->name('StdApply');
/* Route::post('/StdApply',[StdApplyController::class, 'store']); */

Route::get('/WApply',[WApplyController::class, 'index'])->name('WApply');
Route::post('/WApply',[WApplyController::class, 'store']);


Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'store']);

Route::post('/logout',[LogoutController::class, 'store'])->name('logout');

Route::get('/posts', function () {
return view('posts.index');
});


Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

    Route::get('/dashboard',[AdminController::class, 'index'])->name('admin');

    Route::get('/student_pending',[AdminController::class, 'stdpending'])->name('stdpending');
    Route::get('/managestdpending/{id}',[AdminController::class, 'mstdpending'])->name('mstdpending');
    Route::put('/astdpending/{id}',[AdminController::class, 'astdpending'])->name('astdpending');

    Route::get('/register',[RegisterController::class, 'index'])->name('register');
    Route::post('/register',[RegisterController::class, 'store']);



});
?>