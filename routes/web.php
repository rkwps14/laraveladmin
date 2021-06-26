<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{LoginController, UsersController, BranchController, PatientController, DoctorController};

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login',[LoginController::class, 'login'])->name('login');
Route::post('login',[LoginController::class, 'authenticate']);



Route::middleware('auth')->group(function () {
    
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
	Route::get('dashboard',[LoginController::class, 'dashboard']);

	Route::get('users',[UsersController::class, 'index']);
	Route::get('users/create',[UsersController::class, 'create']);
	Route::post('users/submit',[UsersController::class, 'store']);

	Route::get('branchs/create',[BranchController::class, 'create']);
	Route::get('branchs',[BranchController::class, 'index']);
	Route::post('branch/submit',[BranchController::class, 'store']);

	Route::get('patients/create',[PatientController::class, 'create']);
	Route::get('patients',[PatientController::class, 'index']);
	Route::post('patients/submit',[PatientController::class, 'store']);

	Route::get('patient/chart',[DoctorController::class, 'index']);
// Edit and Delete for Users

	Route::get('edit/{id}',[UsersController::class, 'edit']);
	Route::post('users/update/{id}',[UsersController::class, 'update'])->name('users/update');

	Route::get('delete/{id}',[UsersController::class, 'destroy']);


// Edit and Delete for Branch

	Route::get('branch/edit/{id}',[BranchController::class, 'edit']);
	Route::post('branch/update/{id}',[BranchController::class, 'update']);

	Route::get('branch/delete/{id}',[BranchController::class, 'destroy']);

// Edit and Delete for Patient

	Route::get('edit/{id}',[PatientController::class, 'edit']);
	Route::post('update/{id}',[PatientController::class, 'update']);

	Route::get('delete/{id}',[PatientController::class, 'destroy']);

});


// Route::group(['middleware'=>['typeCheck']], function(){

// });


