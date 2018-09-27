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
//summernote form 
Route::view('/summernote','summernote');
 
//summernote store route
Route::post('/summernote','SummernoteController@store')->name('summernotePersist');
 
//summernote display route
Route::get('/summernote_display','SummernoteController@show')->name('summernoteDispay');