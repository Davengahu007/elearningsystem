<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\StdApplyController;
use App\Http\Controllers\WApplyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddCoursesController;
use App\Http\Controllers\AddUnitController;
use App\Http\Controllers\MailController;


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

Route::get('send-mail', [MailController::class, 'index']);

Route::get('/posts', function () {
return view('posts.index');
});



Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

    Route::get('/dashboard',[AdminController::class, 'index'])->name('admin');

    Route::get('/student_pending',[AdminController::class, 'stdpending'])->name('stdpending');
    Route::get('/managestdpending/{id}',[AdminController::class, 'mstdpending'])->name('mstdpending');
    Route::put('/astdpending/{id}',[AdminController::class, 'astdpending'])->name('astdpending');

    Route::get('/worker_pending',[AdminController::class, 'wpending'])->name('wpending');
    Route::get('/managewpending/{id}',[AdminController::class, 'mwpending'])->name('mwpending');
    Route::put('/awpending/{id}',[AdminController::class, 'awpending'])->name('awpending');

    Route::get('/register',[RegisterController::class, 'index'])->name('register');
    Route::post('/register',[RegisterController::class, 'store']);

    Route::get('/addcourse',[AddCoursesController::class, 'index'])->name('addcourse');
    Route::post('/addcourse',[AddcoursesController::class, 'store']);
    Route::get('/viewcourse',[AddCoursesController::class, 'viewcourse']);
    Route::get('/delete_course/{id}',[AddCoursesController::class, 'destroy']);
    Route::get('/edit_course/{id}',[AddCoursesController::class, 'edit']);
    Route::put('/update_course/{id}',[AddCoursesController::class, 'update']);

    Route::get('/addunit',[AddUnitController::class, 'index'])->name('addunit');
    Route::post('/addunit',[AddUnitController::class, 'store']);
    Route::get('/viewunit',[AddUnitController::class, 'viewunit']);
    Route::get('/delete_unit/{id}',[AddUnitController::class, 'destroy']);
    Route::get('/edit_unit/{id}',[AddUnitController::class, 'edit']);
    Route::put('/update_unit/{id}',[AddUnitController::class, 'update']);

});

?>
