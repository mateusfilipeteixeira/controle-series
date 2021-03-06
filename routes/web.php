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

// Route::get('/series', 'SeriesController@listarSeries');

// Route::resource('/series', 'SeriesController');
Route::get('/series', 'SeriesController@index');
Route::get('/series/create', 'SeriesController@create');
Route::post('/series/create', 'SeriesController@store');
Route::delete('/series/{id}', 'SeriesController@destroy');

Route::get('/series/{serieId}/temporadas', 'TemporadasController@index');
