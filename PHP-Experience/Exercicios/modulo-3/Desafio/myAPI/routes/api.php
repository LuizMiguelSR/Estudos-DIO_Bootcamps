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

/*
Route::get('hello/{name}', function($name) {
    return 'hello ' . $name;
});

Route::get('hello-post/{name}', "App\Http\Controllers\HelloWorldController@hello");

*/

Route::get('bands', 'App\Http\Controllers\BandController@getAll');

Route::post('bands/store', 'App\Http\Controllers\BandController@store');

Route::get('bands/{id}', 'App\Http\Controllers\BandController@getById');

Route::get('bands/gender/{gender}', 'App\Http\Controllers\BandController@getBandsByGender');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
