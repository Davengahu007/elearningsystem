<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\StdApplyController;
use App\Http\Controllers\WApplyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddCoursesController;
use App\Http\Controllers\AddUnitController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\AddAssignmentController;
use App\Http\Controllers\FinanceController;


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

Route::get('send-mail', [AdminController::class, 'send_email']);

Route::get('/posts', function () {
return view('posts.index');
});

Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

    Route::get('/dashboard',[AdminController::class, 'index'])->name('admin');

    Route::get('/student_pending',[AdminController::class, 'stdpending'])->name('stdpending');
    Route::get('/managestdpending/{id}',[AdminController::class, 'mstdpending'])->name('mstdpending');
    Route::put('/astdpending/{id}',[AdminController::class, 'astdpending'])->name('astdpending');

    Route::get('/worker_pending',[AdminController::class, 'wpending'])->name('wpending');
    Route::get('/managewpending/{id}',[AdminController::class, 'mwpending'])->name('mwpending');
    Route::put('/awpending/{id}',[AdminController::class, 'awpending'])->name('awpending');


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

    Route::get('/viewstudents',[RegisterController::class, 'view_students'])->name('view_students');
    Route::get('/viewlecturers',[RegisterController::class, 'view_lecturers']);
    Route::get('/viewworkers',[RegisterController::class, 'view_workers'])->name('view_workers');

    Route::post('/assign_fee/{id}',[AdminController::class, 'fee'])->name('assign_fee');

});

Route::prefix('student')->middleware(['auth','isStudent'])->group(function(){
    Route::get('/dashboard',[StudentController::class, 'index'])->name('student');

    Route::get('/viewunits',[StudentController::class, 'units'])->name('viewunits');
    Route::get('/unit_detail/{id}',[StudentController::class,'viewunit']);
    Route::post('/register_unit/{id}',[StudentController::class, 'register']);

    Route::get('/payment',[StudentController::class, 'make_payment'])->name('make_payment');
    
    Route::post('/make_payment',[StudentController::class, 'pay'])->name('lipa');
    Route::get('/viewpayments',[StudentController::class, 'viewpayments'])->name('view_payments');

    Route::get('/add_details',[StudentController::class, 'add_details'])->name('add_details');
    Route::post('/add_details',[StudentController::class, 'bank_details']);

    Route::get('/viewassignment',[StudentController::class, 'viewassignment'])->name('viewassignments');
    Route::get('/assignment',[StudentController::class, 'give'])->name('give');
    Route::post('/assignment',[StudentController::class, 'submission']);
});

Route::prefix('finance')->middleware(['auth','inFinance'])->group(function(){
    Route::get('/dashboard',[FinanceController::class, 'index'])->name('finance');

    Route::get('/payments_made',[FinanceController::class, 'payments'])->name('payments_made');
    Route::get('/pending_clearance',[FinanceController::class, 'fee_balance'])->name('pending_clearance');
    Route::get('/cleared_students',[FinanceController::class, 'cleared'])->name('cleared');
    Route::get('/urgent',[FinanceController::class, 'urgent'])->name('urgent');
    
});


 Route::prefix('lecturer')->middleware(['auth','isLecturer'])->group(function(){
    Route::get('/dashboard',[LecturerController::class, 'index'])->name('lecturer');

    Route::get('/addassignment',[AddAssignmentController::class, 'index'])->name('addassignment');
    Route::post('/addassignment',[AddAssignmentController::class, 'store']);

    Route::get('/viewassignment',[AddAssignmentController::class, 'viewassignment'])->name('viewassignment');

    Route::get('/viewsubmissions',[AddAssignmentController::class, 'viewsubmission'])->name('viewsubmissions');

    // Route::get('/download/{$id}', [AddAssignmentController::class, 'download'])->name('download');
    });



    Route::middleware(['auth'])->group(function(){
       
        Route::get('/change-password', [UserController::class, 'passwordCreate'])->name('change-password');
        Route::post('/change-password', [UserController::class, 'changePassword']);
    });


?>


