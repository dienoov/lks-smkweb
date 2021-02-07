<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TeamController;
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

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
});

Route::group(['prefix' => 'team', 'middleware' => 'auth:api'], function () {
    Route::post('', [TeamController::class, 'create']);
    Route::get('', [TeamController::class, 'all']);
    Route::get('{id}', [TeamController::class, 'find']);
    Route::put('{id}', [TeamController::class, 'update']);
//    Route::delete()
});

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
