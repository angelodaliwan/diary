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
Route::get('/', function (){
    return redirect('/login');
});
Auth::routes();

Route::get('user/edit-profile', 'UsersController@index');
Route::put('user/{user}', 'UsersController@update');


Route::get('user/create-diary', 'DiariesController@create');
Route::post('user/{user}/save-diary', 'DiariesController@save');
Route::get('user/edit-diary/{diary}','DiariesController@edit');
Route::put('diary/{diary}', 'DiariesController@update');
Route::get('user/{user}/show-diaries', 'DiariesController@show');
Route::delete('diary/{diary}', 'DiariesController@delete');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('diaries/lists', 'DiariesController@index');
