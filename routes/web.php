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


Route::get('/', 'BookController@home');
Route::get('/sellbook/list', 'BookController@list');
Route::get('/sellbook/add', 'BookController@add');
Route::post('/sellbook/proses', 'BookController@proses');
Route::get('/sellbook/edit/{id}', 'BookController@edit');
Route::post('/sellbook/update', 'BookController@update');
Route::get('/sellbook/delete/{id}', 'BookController@delete');
Route::get('/sellbook/search', 'BookController@search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
