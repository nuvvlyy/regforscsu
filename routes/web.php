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

Route::get('/', 'indexcontroller@getindex');
Route::post('/People', 'indexcontroller@postCreatePeople');
Route::post('/Student', 'indexcontroller@postCreateStudent');
Route::post('/Teacher', 'indexcontroller@postCreateTeacher');
Route::get('/show/{id}', 'indexcontroller@getPeople');

Route::get('/inroom/{id}/{room}', 'indexcontroller@getinroom');
Route::get('/total', 'indexcontroller@getTotal');
Route::get('/countday','indexcontroller@getcountday');
Route::get('/total/{day}','indexcontroller@getSelectDay');

Route::get('/showroom/{room}','IndexController@getShowroom');
Route::get('/show','IndexController@getShow');
Route::get('/del/{id}','indexcontroller@getdel');