<?php

use App\Http\Controllers\AuthController;
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

//Route::prefix('v1')->namespace('api')->group(function () {
//Route::prefix('v1')->namespace('Api')->group(function () {

Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');

//  forgot password
Route::post('password/email', 'AuthController@forgotPassword');
Route::post('password/reset', 'AuthController@resetPassword');

// testing route
Route::get('test', 'HomeController@test');

//  forgot password
Route::post('password/email', 'AuthController@forgotPassword');
Route::post('password/reset', 'AuthController@resetPassword');

// testing route
Route::get('test', 'HomeController@test');

Route::middleware('auth:api')->group(function () {
    // put the routes below in here after using them in unauthenticated mode
});
// modified post
Route::get('show/post', 'PostController@showAllPost');
Route::get('all/post', 'PostController@allPost');

// getRefereeCount
Route::get('link-count', [AuthController::class, 'getRefereeCount']);

// change password
Route::post('change-password', 'AuthController@changePassword');

Route::get(
    'get_school_album_count/{school}',
    'SchoolController@schoolAlbumCount'
);
// total number of users and schools
Route::get(
    'get_total_no/users/schools',
    'UserController@totalNoOfUsersAndSchools'
);

//School Resource
Route::resource('schools', 'SchoolController');
Route::get('school/{school}/members', 'SchoolController@members');

//Groups

Route::get(
    'groups/schools/{school}',
    'GroupController@getAllGroupsUnderSchool'
);
Route::resource('groups', 'GroupController');
Route::post('groups/join', 'GroupController@join');
Route::post('groups/leave', 'GroupController@leave');

//PGroups
Route::resource('pgroups', 'PgroupController');
Route::get('memberships/pgroups/{pgroup}', 'MembershipController@pgroups');
Route::resource('memberships', 'MembershipController');

Route::post('pgroups/search', 'MembershipController@searchPgroups');
Route::post('pgroups/join', 'MembershipController@join');

//   Route::post('pgroups/leave', 'PgroupController@leave');

// Events
Route::resource('events', 'EventController');
Route::post('events/attend', 'EventController@attendEvent');

// topic
Route::resource('topics', 'TopicController');

// Report
Route::resource('reports', 'ReportController');

//categories
Route::resource('categories', 'CategoryController');

//Business
Route::get(
    'businesses/services/{bussiness}',
    'BusinessController@getAllServicesUnderABussiness'
);
Route::resource('businesses', 'BusinessController');

//Business Bay
Route::resource('bays', 'BayController');
Route::post('bay/{business}', 'BayController@replicate');

Route::get('bay/{key1}/{key2}/{key3}/{key4}', 'BayController@generalSearch');
Route::get(
    'baygroup/{key1}/{key2}/{key3}/{key4}/{key5}',
    'BayController@searchByGroup'
);
Route::post('bay/business/search', 'BayController@searchBay');

//Services
Route::resource('services', 'ServiceController');
Route::resource('uploadImage', 'ServiceImageController');

// post::posts/user/2
Route::get('posts/user/{user}', 'PostController@getUserPost');
//posts
Route::get(
    '/posts/get_all_post_by_classmate',
    'PostController@getAllPostByClassMate'
);
Route::resource('posts', 'PostController');

// post::posts/user/2
Route::get('posts/user/{user}', 'PostController@getUserPost');
//posts
Route::get(
    '/posts/get_all_post_by_classmate',
    'PostController@getAllPostByClassMate'
);
Route::resource('posts', 'PostController');

//Thread
Route::resource('threads', 'ThreadController');

Route::prefix('posts')->group(function () {
    Route::get('{post}/comments', 'PostController@getComments');
    Route::post('like/{post}/{user}', 'PostController@liker');
    //Route::patch('dislike/{post}', 'PostController@dislike');
});

//comments
Route::resource('comments', 'CommentController');

// Users
Route::prefix('users')->group(function () {
    //  Route::put('{user}', 'UserController@update');
    //get user followers
    // Route::get('users/myFollowers', 'UserController@myFollowers');
    Route::get('myfollowers', 'UserController@myFollowers');
    Route::get('{user}/groups', 'UserController@getGroups');
    Route::post('pally', 'UserController@followRequest');
    Route::get('pally/{id}/followers', 'UserController@getFollowers');
    Route::post('block', 'UserController@blockRequest');
    //::::get my pgroups
    Route::get('{user}/pgroups', 'UserController@getMyPGroups');
});
Route::resource('users', 'UserController');

// States
Route::get('states', 'StateController@index');
Route::get('states/{state}', 'StateController@show');

//Countries
Route::get('countries', 'CountryController@index');
