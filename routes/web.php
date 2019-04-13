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
    //return view('welcome');
    return 'welcome';
});

Route::get('/hello', 'siteController@index');
Route::get('/welcome', 'siteController@welcome');
Route::get('contact', 'siteController@contact');

Route::get('/articles', 'ArticlesController@index');
Route::get('/article/create', 'ArticlesController@create');
Route::get('/article/{id}', 'ArticlesController@show');
