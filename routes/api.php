<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SchoolTypeController;
use App\Http\Controllers\StateController;
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
    Route::apiResource('school_types', SchoolTypeController::class);
    Route::apiResource('users', AuthController::class);
    Route::apiResource('schools', SchoolController::class);
    Route::apiResource('countries', CountryController::class);
    Route::apiResource('states', StateController::class);
    Route::apiResource('cities', CityController::class);

    Route::get('user/{user}', [AuthController::class, 'showByName']);

    Route::get('country/{country}', [CountryController::class, 'showByName']);

    Route::get('state/{state}', [StateController::class, 'showByName']);
    Route::get('state/capital/{capital}', [StateController::class, 'showByCapital']);
    Route::get('state/search_capital/{capital}', [StateController::class, 'showByCapitalUnstrict']);
    Route::get('state/country_id/{country_id}', [StateController::class, 'showByCountryId']);

    Route::get('city/{city}', [CityController::class, 'showByName']);
    Route::get('city/state_id/{state_id}', [CityController::class, 'showByStateId']);

    Route::get('school/{school}', [SchoolController::class, 'showByName']);
    Route::get('school/city/{city_id}', [SchoolController::class, 'showByCityId']);
    Route::get('school/{city_id}/{school}', [SchoolController::class, 'showByNameAndCity']);

    Route::post('/logout', [AuthController::class, 'logout']);
});
