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

Route::get('/', 'Competition@index');
Route::get('/signup', 'Competition@create');
Route::get('/signup/{id}', ['uses' => 'Competition@createWithId']);
Route::post('/store', 'Competition@store');
Route::get('/check', 'Competition@check');
Route::post('/show', 'Competition@show');