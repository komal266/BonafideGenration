<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BonafideController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'home']);
    //Student Module
	Route::get('students', [StudentController::class, 'index'])->name('students');
    // Route for editing a student
    Route::get('/students/edit/{id}', [StudentController::class, 'edit'])->name('editStudent');

    // Route for updating a student
    Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');

    Route::post('newstudent',[StudentController::class,'form'])->name('stu_new');
    Route::post('savenewstudent', [StudentController::class, 'store'])->name('new_stu_save');
    Route::post('/promote-all-students', [StudentController::class,'promoteAllStudents'])->name('promote');
    //Bonafide Module
    Route::get('/bonafide', [BonafideController::class, 'allbona']);
    Route::post('bona-print', [BonafideController::class, 'bonaprint'])->name('bona-print');
    Route::get('/bonafide/student',[BonafideController::class,'bonafideStudent'])->name('Student_Bonafide');

    //Transfer Certificate Module
	Route::get('transfer', [TransferController::class, 'alltc']);
    Route::get('viewTc',[TransferController::class,'viewtc'])->name('Student_Transfer');
    Route::post('printTc',[TransferController::class,'printTC'])->name('tcprint');




    Route::get('/logout', [SessionsController::class, 'destroy']);

	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
		return view('students');
	})->name('sign-up');
});



Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});

Route::get('/login', function () {
    return view('session/login-session');
})->name('login');
