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


Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'PostsController@index');

    Route::get('/insert', 'InsertController@insertform');

    Route::post('/insert', 'InsertController@insert')->name('/insert');

    Route::view('/update', 'update')->name('/update');

    Route::get('/update1', 'UpdateController@download')->name('/update1');

    Route::post('/update2', 'UpdateController@update')->name('/update2');
});

