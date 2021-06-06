<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GivebloodController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResetPassController;
use App\Http\Controllers\ResetPassHospitalController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\CalDistanceController;
use App\Http\Controllers\RegisterUserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('givebloods', [GivebloodController::class, 'store']);
Route::get('givebloods', [GivebloodController::class, 'index']);      
Route::delete('givebloods/{id}', [GivebloodController::class, 'deleteGiveblood']); 

Route::get('edithospital/{id}', [HospitalController::class, 'edit']); 
Route::post('edithospital/{id}', [HospitalController::class, 'update']);
Route::get('edithospital', [HospitalController::class, 'index']);

Route::get('edituser/{id}', [UserController::class, 'edit']); 
Route::post('edituser/{id}', [UserController::class, 'update']);
Route::get('edituser', [UserController::class, 'index']);

Route::post('resetuser/{id}', [ResetPassController::class, 'update']);
Route::get('resetuser', [ResetPassController::class, 'index']);
Route::get('resetuser/{id}', [ResetPassController::class, 'edit']);

Route::post('resethospital/{id}', [ResetPassHospitalController::class, 'update']);
Route::get('resethospital', [ResetPassHospitalController::class, 'index']);
Route::get('resethospital/{id}', [ResetPassHospitalController::class, 'edit']);

Route::prefix('auth')->group(function() {
    Route::get('init', [RegisterUserController::class, 'init']);
    Route::post('logout', [RegisterUserController::class, 'logout']);
    Route::prefix('user')->group(function() {
        Route::post('login', [RegisterUserController::class, 'loginUser']);
        Route::post('register', [RegisterUserController::class, 'registerUser']);
        Route::post('location', [LocationController::class, 'store']);
    });
});
Route::post('calculate', [CalDistanceController::class, 'cal']);

