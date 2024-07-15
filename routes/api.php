<?php

use App\Http\Controllers\Api\DataController;
use App\Http\Controllers\Api\NewsController;
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

Route::group(['middleware' => 'api'], function () {
    Route::post('/post', [DataController::class, 'post']);
    Route::group(['prefix' => '/get'], function () {
        Route::get('/data', [DataController::class, 'data']);
        Route::get('/latest', [DataController::class, 'latest']);
        Route::get('/charts', [DataController::class, 'charts']);
    });
    Route::get('/news', [NewsController::class, 'index']);
});
