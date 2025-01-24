<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TourController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register', [UserController::class, 'register']);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/tours', [TourController::class, 'index']);
    Route::post('/tours', [TourController::class, 'store']);
    Route::put('/tours/{tour}', [TourController::class, 'update']);
    Route::delete('/tours/{tour}', [TourController::class, 'destroy']);
});
