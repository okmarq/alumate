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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/schools', [SchoolController::class, 'store']);
    Route::put('/schools/{id}', [SchoolController::class, 'update']);
    Route::delete('/schools/{id}', [SchoolController::class, 'delete']);

    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::get('/schools', [SchoolController::class, 'index']);
Route::get('/schools/{id}', [SchoolController::class, 'show']);

Route::get('/schools', function () {
    return 'schools';
});
