<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landingdev');
});

// Route::get('/dashboard',function(){
//     return view('dashboard');
// });

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/settings', [App\Http\Controllers\SettingsController::class, 'index'])->name('settings');


Route::get('/gis',function(){
    return view('gis');
});
