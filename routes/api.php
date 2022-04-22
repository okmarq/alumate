<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\GroupsController;
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
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::apiResource('/users', AuthController::class);
Route::get('/users/name/{name}', [AuthController::class, 'showByName']);
Route::get('/users/alumni/{user_id}', [AuthController::class, 'showAlumni']);
// Route::get('/users/groups/{user_id}', [AuthController::class, 'showAlumni']);
Route::get('/users/search/{name}', [AuthController::class, 'showByAlumni']);
Route::get('/users/invite/{code}', [AuthController::class, 'showByInviteCode']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::apiResource('/academics', UserProgramDepartmentController::class);

Route::apiResource('/alumni', AlumniController::class);
Route::get('/alumni/search/{name}', [AlumniController::class, 'searchSchoolmates']);
Route::get('/alumni/schoolmates/{school_id}', [AlumniController::class, 'schoolmate']);
Route::get('/alumni/classmates/{school_id}/{graduation_year}', [AlumniController::class, 'classmate']);
Route::get('/alumni/classmates_ay/{school_id}/{admission_year}', [AlumniController::class, 'classmate_ay']);
Route::get('/alumni/classmates/{school_type_id}/{school_id}/{admission_year}', [AlumniController::class, 'otherClassmate']);
Route::get('/alumni/{school_type_name}/{school_name}/{admission_year}', [AlumniController::class, 'otherNameClassmate']);
// Route::get('/alumni/groups/{user_id}', [AlumniController::class, 'groupuser']);
Route::get('/users/{user_id}/groups', [AlumniController::class, 'groupuser']);

Route::apiResource('/cities', CityController::class);
Route::get('/cities/name/{name}', [CityController::class, 'showByName']);
Route::get('/cities/state/{state_id}', [CityController::class, 'showByStateId']);
Route::get('/cities/{state_id}/{name}', [CityController::class, 'showByNameAndState']);

Route::apiResource('/countries', CountryController::class);
Route::get('/countries/name/{name}', [CountryController::class, 'showByName']);

Route::apiResource('/school_types', SchoolTypeController::class);
Route::get('/school_types/name/{name}', [SchoolTypeController::class, 'showByName']);

Route::apiResource('/schools', SchoolController::class);
Route::get('/schools/name/{name}', [SchoolController::class, 'showByName']);
Route::get('/schools/city/{city_id}', [SchoolController::class, 'showByCityId']);
Route::get('/schools/{city_id}/{name}', [SchoolController::class, 'showByNameAndCity']);
Route::get('/schools/state/{state_id}/{school_type}', [SchoolController::class, 'showByStateShcoolType']);

Route::apiResource('/states', StateController::class);
Route::get('/states/name/{name}', [StateController::class, 'showByName']);
Route::get('/states/capital/{name}', [StateController::class, 'showByCapital']);
Route::get('/states/search_capital/{name}', [StateController::class, 'showByCapitalUnstrict']);
Route::get('/states/country/{country_id}', [StateController::class, 'showByCountryId']);

Route::apiResource('/professional_bodies', ProfessionalBodiesController::class);

Route::apiResource('/professional_groups', ProfessionalGroupsController::class);

Route::apiResource('/groups', GroupsController::class);