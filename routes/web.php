<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\RegisterHosController;
use App\Http\Controllers\GivebloodController;
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


Route::prefix('auth')->group(function() {
    Route::get('init', [RegisterUserController::class, 'init']);
    Route::post('logout', [RegisterUserController::class, 'logout']);
    Route::prefix('user')->group(function() {
        Route::post('login', [RegisterUserController::class, 'loginUser']);
        Route::post('register', [RegisterUserController::class, 'registerUser']);
    });
    Route::prefix('hospital')->group(function() {
        Route::get('init', [RegisterHosController::class, 'init']);
        Route::post('login', [RegisterHosController::class, 'loginHospital']);
        Route::post('register', [RegisterHosController::class, 'registerHospital']);
        Route::post('logout', [RegisterHosController::class, 'logout']);
    });
    
});
