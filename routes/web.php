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

Route::get('/', 'ContactsController@index');
//Route::get('/contacts/{id}', 'ContactsController@show');
//Route::get('/form', 'ContactsController@index');
Route::resource('/contacts', 'ContactsController');
//Route::get('/contacts/sort','ContactsController@sort');
