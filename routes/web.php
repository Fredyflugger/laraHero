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

if ( file_exists( app_path( 'Http/Controllers/LocalisationController.php') ) ) 
{
  Route::get('lang/{locale}', 'App\Http\Controllers\LocalisationController@lang');
}

Route::get('/', function () {
    return redirect('/anton');
});


Route::group(['prefix' => 'anton'], function () {
  Route::get('/', 'App\Http\Controllers\AntonController@index')->name('antonIndex');
  Route::get('/medicare', 'App\Http\Controllers\AntonController@medicare')->name('medicare');
  Route::get('/concomitant', 'App\Http\Controllers\AntonController@concomitant')->name('concomitant');
});

// Route::get('/svetlana', 'App\Http\Controllers\SvetlanaController@index')->name('svetlanaIndex');