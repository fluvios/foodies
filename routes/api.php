<?php

use Illuminate\Http\Request;

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

// Authentification route goes here
Route::post('/login', 'Auth\LoginController@login');

// Data resource route goes here
Route::group(['middleware' => 'auth:api'], function() {
    Route::resource('/category', 'CategoryController')->except(['show']);
});