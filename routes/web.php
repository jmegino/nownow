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

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'HomeController@index');

Route::get('/membersearch', 'HomeController@memberSearch');

Route::get('/transmissionhist', 'HomeController@transmissionHistory');

//New Controllers

Route::get('/membersearch/show', 'HomeController@showMember');

Route::get('/phpfirebase_sdk', 'FirebaseController@index');