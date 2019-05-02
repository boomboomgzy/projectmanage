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

Route::get('/', function () { return view('welcome'); });
//Route::get('/user/name',function(){ return 'Name Page' });
Route::get('/user/name','UserController@name');
Route::get('young/{age}','User\UserController@young')->middleware('young');
Route::get('about','StaticPageController@about')->name('about');
Route::resource('projects','ProjectController');
