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

    Route::view('/insert', 'insert');

    Route::post('/insert', 'InsertController@insert')->name('posts.insert');

    Route::view('/update', 'update');

    Route::get( '/updateById', 'UpdateController@download')->name('posts.download');

    Route::post('/updateDate', 'UpdateController@update')->name('posts.update');
});

