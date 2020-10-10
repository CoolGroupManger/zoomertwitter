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

/*
Get request
*/
Route::get('/', 'HomeController@index');
Route::get('/aboutus', 'AboutController@index');
Route::get('/options', 'OptionsController@index');
Route::get('/help', 'HelpController@index');

/*
Post Request
*/
Route::post('/create', 'MessageController@create');