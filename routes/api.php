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

Route::group(['middleware' => ['json.response']], function() {
    Route::group(['middleware' => ['auth:api', 'role:admin']], function() {
        Route::post('/user/create/client', 'API\UserAPIController@client');
        Route::put ('/user/client/{id}', 'API\UserAPIController@update');
    });
});
