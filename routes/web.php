<?php

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

Route::view('/summernote','summernote');

Route::post('/summernote','SummernoteController@store')->name('summernotePersist');
Route::get('/summernote_display','SummernoteController@show')->name('summernoteDispay');
