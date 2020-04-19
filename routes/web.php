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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


Route::get('/', 'HomeController@index')->name('home');
Route::get('/about/who-we-are', 'HomeController@whoweare')->name('whoweare');
Route::get('/virtual', 'HomeController@virtual')->name('virtual');
Route::get('/facility/development', 'HomeController@facilityDevelopment')->name('development');