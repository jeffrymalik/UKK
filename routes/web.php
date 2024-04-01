<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing.LandingPage');
});

Route::get('/login', function(){
    return view('Auth.Login');
});

Route::post('/login',[AuthController::class,'dologin']);
Route::get('/logout',[AuthController::class,'logout']);

Route::post('/register',[AuthController::class,'register']);


Route::get('/register', function(){
    return view('Auth.SignUp');
});


