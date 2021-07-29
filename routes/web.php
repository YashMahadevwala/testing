<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\crudController;
use App\Http\Controllers\httpController;
use App\Http\Controllers\authController;

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

Route::get('/test',[testController::class,'index']);

// 1st route call load view page & show to user 2nd is get data when user click button & call crudController insert method
Route::get('/crud',[crudController::class,'index']);
Route::post('/crud',[crudController::class,'insert']);

Route::get('/http',[httpController::class,'index']);


Route::get('/home', function () {
    return response()->json([
        'name' => 'Abigail',
        'state' => 'CA',
    ]);
});


// reg

Route::post('/registration',[authController::class,'store']);
// login

Route::post('/login',[authController::class,'logcheck']);
// dash

// logout
Route::get('/logout',[authController::class,'logout']);

Route::group(['middleware' => 'authentic'],function(){
    Route::get('/login',[authController::class,'login']);
    Route::get('/registration',[authController::class,'index']);
    Route::get('/dashboard',[authController::class,'dashboard']);
});