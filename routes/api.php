<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/feed','App\Http\Controllers\FeedingController@index');
Route::get('/water','App\Http\Controllers\WaterController@index');
Route::get('/turdibity','App\Http\Controllers\FilterController@index');

Route::get('/feed-chart','App\Http\Controllers\ChartController@feedchart');
Route::get('/water-chart','App\Http\Controllers\ChartController@waterchart');
Route::get('/filter-chart','App\Http\Controllers\ChartController@filterchart');
