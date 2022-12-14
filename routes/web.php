<?php

use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecordsController;

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

//show main page
Route::get('/', [RecordsController::class, 'index']);

//register page
Route::get('/register', [RecordsController::class, 'reg']);

//login
Route::get('/login', [UserController::class, 'login']);

//store students info
Route::post('/register/store',[RecordsController::class,'store']);

//log in user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

//home page
Route::get('/home', [RecordsController::class, 'home']);

//dashboard
Route::get('/personal-info/{PersonalInfo}', [RecordsController::class, 'dashboard']);



