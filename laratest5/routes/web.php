<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
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

Route::get('/', function () {
    echo "Test request";
    //return view('welcome');
});

//login controller

//for get request
// Route::get('/login', ['uses'=>'LoginController@index']);
Route::get('/login', [LoginController::class,'index']); //laravel 8
//for post request
// Route::post('/login', ['uses'=>'LoginController@verify']);
Route::post('/login', [LoginController::class,'verify']);

Route::get('/register', function () {
   echo "this is signup page";
});

Route::post('/register', function () {
    echo "this is signup page";
 });

Route::get('/home', [HomeController::class,'index']);

Route::get('/logout', [LogoutController::class,'index']);

// Route::get('/user/create', [UserController::class,'create']);

// Route::get('/user/all', [UserController::class,'all']);
Route::get('/user/create', [UserController::class,'create'] );



