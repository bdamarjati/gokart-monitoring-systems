<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChargeController;
use App\Http\Controllers\DataGokartController;
use App\Http\Controllers\GokartController;
use App\Http\Controllers\SettingsController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Charging Station Data
Route::get('ChargeData',[ChargeController::class,'getChargeData']);
Route::post('ChargeData',[ChargeController::class,'postChargeData']);

// Gokart Data
Route::get('GpsData',[DataGokartController::class,'getGpsData']);
Route::post('GpsData',[DataGokartController::class,'postGpsData']);
Route::get('BatData',[DataGokartController::class,'getBatteryData']);
Route::post('BatData',[DataGokartController::class,'postBatteryData']);

// Gokart
Route::get('Gokart',[GokartController::class,'getGokart']);
Route::get('Status',[GokartController::class,'getStatus']);
Route::post('Status',[GokartController::class,'postStatus']);
Route::get('Lap',[GokartController::class,'getLapList']);
Route::get('Lap/{id}',[GokartController::class,'getLap']);
Route::post('Lap',[GokartController::class,'postLap']);

// New Gokart API
Route::get('getGokartData',[DataGokartController::class, 'getAllGokartData']);

Route::get('countLap',[GokartController::class, 'countLap']);
Route::post('reset',[GokartController::class, 'resetLap']);

Route::post('postDis',[SettingsController::class, 'postDisinf']);
