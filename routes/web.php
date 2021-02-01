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
    return view('welcome');
});

Route::get('/anton', 'App\Http\Controllers\AntonController@index')->name('antonIndex');
// Route::get('/svetlana', 'App\Http\Controllers\SvetlanaController@index')->name('svetlanaIndex');
