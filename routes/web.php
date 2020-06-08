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

Route::get('/', function () {
    return view('welcome');
});


Route::get('home', 'CurdController@index')->name('home');
Route::get('create', 'CurdController@createRecord')->name('insert-record');
Route::post('insert-record', 'CurdController@insertRecord')->name('insert-record');
Route::get('show-record', 'CurdController@showRecord')->name('show-record');
Route::get('edit-record/{id}', 'CurdController@editRecord')->name('edit-record');
Route::match(['put', 'patch'], 'update-record/{id}', 'CurdController@updateRecord')->name('update-record');
Route::get('delete-record/{id}', 'CurdController@deleteRecord')->name('delete-record');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
