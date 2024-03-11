<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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



Route::get('/', [HomeController::class, 'home'])->middleware('auth','verified');

Route::get('login', [AuthController::class, 'login']);

Route::get('register', [AuthController::class, 'register']);

Route::post('register', [AuthController::class, 'create_user']);

Route::get('forgot_password', [AuthController::class, 'forgot_password']);

