<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/', [RecordsController::class,'index']);

//register page
Route::get('/register',[RecordsController::class,'reg']);

//login
Route::get('/login',[RecordsController::class,'login']);

//student_user page
Route::get('/student_user',[RecordsController::class,'student']);

//admin_user page
Route::get('/admin_user',[RecordsController::class,'admin']);

//guidance_user page
Route::get('/guidance_user',[RecordsController::class,'guidance']);


//registrar_user page
Route::get('/registrar_user',[RecordsController::class,'registrar']);


//do_user page
Route::get('/do_user',[RecordsController::class,'do']);


