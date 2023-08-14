<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index.index');
});

Route::get('/feeding', function () {
    return view('tables.feeding');
});

Route::get('/water-level', function () {
    return view('tables.water');
});

Route::get('/turdibity', function () {
    return view('tables.filter');
});

Route::get('/charts', function () {
    return view('charts.index');
});
