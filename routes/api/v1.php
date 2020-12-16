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

Route::group([
    'prefix' => 'auth'
], function() {
    Route::post('register', 'AuthController@register');
    Route::post('login', 'AuthController@login');
});

Route::middleware('auth:api')->get('/me', function (Request $request) {
    return $request->user();
});

Route::group([
    'prefix' => 'task',
    'middleware' => ['auth:api']
], function() {
    Route::get('/', 'TaskController@index');
    Route::post('/', 'TaskController@store');
    Route::post('/import', 'TaskController@import');

    Route::get('/{Task}', 'TaskController@show');
    Route::put('/{Task}', 'TaskController@update');
    Route::delete('/{Task}', 'TaskController@destroy');
});

