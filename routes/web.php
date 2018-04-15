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
Route::get('/', 'Page\HomeController@index');

Route::get('/page1', 'Page\HomeController@page1');

Route::get('/page2', 'Page\HomeController@page2');

Route::get('/page3', 'Page\HomeController@page3');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
