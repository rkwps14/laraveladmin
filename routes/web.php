<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{LoginController, UsersController, BranchController, PatientController};

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


});



