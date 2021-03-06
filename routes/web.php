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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('users')->group(function(){
Route::get('/view', 'Backend\UserController@view')->name('users.view'); //table
Route::get('/add', 'Backend\UserController@add')->name('users.add'); //form
Route::post('/store', 'Backend\UserController@store')->name('users.store'); //database
Route::get('/edit/{id}', 'Backend\UserController@edit')->name('users.edit');
Route::post('/update/{id}', 'Backend\UserController@update')->name('users.update');
Route::get('/delete/{id}', 'Backend\UserController@delete')->name('users.delete');
});


