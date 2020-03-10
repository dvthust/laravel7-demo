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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/translate', 'HomeController@translate')->name('translate');
Route::post('/translate', 'HomeController@translate')->name('translate.post');

Route::get('/fluent-string', 'HomeController@fluentString')->name('fluent.string');
Route::get('/posts', 'HomeController@posts')->name('posts');
