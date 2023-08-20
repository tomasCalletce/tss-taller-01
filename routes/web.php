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
Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");

Route::get('/make', 'App\Http\Controllers\MakeController@index')->name("make.index");
Route::post('/make', 'App\Http\Controllers\MakeController@store')->name("make.store");

Route::get('/explore', 'App\Http\Controllers\ExploreController@index')->name("explore.index");
Route::get('/explore/{id}', 'App\Http\Controllers\ExploreController@show')->name("explore.show");