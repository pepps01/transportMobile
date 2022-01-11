<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::prefix('admin')->group(function () {
    
});


Route::prefix('user')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('profile', [AuthController::class, 'profile']);
    Route::post('refresh', [AuthController::class, 'refresh']);
});


Route::prefix('rider')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('profile', [AuthController::class, 'profile']);
    Route::post('refresh', [AuthController::class, 'refresh']);
});

Route::prefix('driver')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('profile', [AuthController::class, 'profile']);
    Route::post('refresh', [AuthController::class, 'refresh']);
});

Route::prefix('payment')->group(function () {
    Route::post('/{id}', [PaymentController::class, 'accept']);
});

Route::prefix('request')->group(function () {
    Route::post('/', [RequestController::class, 'accept']);
    Route::post('/{id}', [RequestController::class, 'accept']);

    // pickup location 
    // drop off location 
    //trip completed
});


Route::prefix('trip')->group(function () {
    Route::post('/', [TripController::class, 'acceptTrip']);
    Route::post('/{id}', [TripController::class, 'trip']);
});
