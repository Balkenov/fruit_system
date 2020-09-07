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

//Route::get('/', function () {
//    return view('apply');
//});

Route::get('/boxes', 'BoxController@index')->name('boxes.index');
Route::POST('/boxes', 'BoxController@store');
Route::get('/boxes/create', 'BoxController@create')->name('boxes.create');
//Route::get('/boxes/{box}', 'BoxesController@show');
Route::get('/boxes/{box}/edit', 'BoxController@edit')->name('boxes.edit');
Route::put('/boxes/{box}/update', 'BoxController@update')->name('boxes.update');
Route::get('/boxes/{box}/delete', 'BoxController@delete')->name('boxes.delete');


Route::get('/fruits', 'FruitController@index')->name('fruits.index');
Route::POST('/fruits', 'FruitController@store');
Route::get('/fruits/create', 'FruitController@create')->name('fruits.create');
//Route::get('/boxes/{box}', 'BoxesController@show');
Route::get('/fruits/{fruit}/edit', 'FruitController@edit')->name('fruits.edit');
Route::put('/fruits/{fruit}/update', 'FruitController@update')->name('fruits.update');
Route::get('/fruits/{fruit}/delete', 'FruitController@delete')->name('fruits.delete');

Route::get('/', 'ApplyController@index')->name('apply.index');
Route::POST('/', 'ApplyController@place');
Route::get('/added', 'ApplyController@added')->name('apply.added');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/home', 'HomeController@index');
