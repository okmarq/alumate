<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ProfessionalBodiesController;
use App\Http\Controllers\ProfessionalGroupsController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SchoolTypeController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\UserProgramDepartmentController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('logout', [AuthController::class, 'logout']);
});

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::apiResource('academics', UserProgramDepartmentController::class);

Route::apiResource('alumni', AlumniController::class);
Route::get('alumni/search/{name}', [AlumniController::class, 'searchSchoolmates']);
Route::get('{school_id}/album/classmates/{graduation_year}', [AlumniController::class, 'classmate']);
Route::get('{school_type}/{school_id}/other/album/classmates/{admission_year}', [AlumniController::class, 'otherClassmate']);
Route::get('{school_id}/album/schoolmates', [AlumniController::class, 'schoolmate']);
Route::get('{school_id}/album/classmates_ay/{admission_year}', [AlumniController::class, 'classmate_ay']);

Route::apiResource('cities', CityController::class);
Route::get('city/{name}', [CityController::class, 'showByName']);
Route::get('{state_id}/cities', [CityController::class, 'showByStateId']);
Route::get('{state_id}/city/{name}', [CityController::class, 'showByNameAndState']);

Route::apiResource('countries', CountryController::class);
Route::get('country/{name}', [CountryController::class, 'showByName']);

Route::apiResource('school_types', SchoolTypeController::class);
Route::get('school_types/name/{name}', [SchoolTypeController::class, 'showByName']);

Route::apiResource('schools', SchoolController::class);
Route::get('school/{name}', [SchoolController::class, 'showByName']);
Route::get('city/{city_id}/school', [SchoolController::class, 'showByCityId']);
Route::get('{city_id}/school/{name}', [SchoolController::class, 'showByNameAndCity']);
Route::get('{state_id}/cities/schools/{school_type}', [SchoolController::class, 'showByStateShcoolType']);

Route::apiResource('states', StateController::class);
Route::get('state/{name}', [StateController::class, 'showByName']);
Route::get('state/capital/{name}', [StateController::class, 'showByCapital']);
Route::get('state/search_capital/{name}', [StateController::class, 'showByCapitalUnstrict']);
Route::get('{country_id}/states', [StateController::class, 'showByCountryId']);

Route::apiResource('users', AuthController::class);
Route::get('user/{name}', [AuthController::class, 'showByName']);
Route::get('user/search/{name}', [AuthController::class, 'showByAlumni']);
Route::get('user/invite/{code}', [AuthController::class, 'showByInviteCode']);

Route::apiResource('professional_bodies', ProfessionalBodiesController::class);

Route::apiResource('professional_groups', ProfessionalGroupsController::class);
