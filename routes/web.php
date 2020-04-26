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
Route::get('/facility/school-facility', 'HomeController@schoolFacility')->name('facility');
Route::get('/parents-portal', 'HomeController@parentsPortal')->name('portal');
Route::get('/about/leadership-team', 'HomeController@leadershipteam')->name('leadershipteam');
Route::get('/about/board-of-directors', 'HomeController@boardofdirectors')->name('boardofdirectors');
Route::get('/gallery', 'HomeController@gallery')->name('gallery');
Route::get('/early-years', 'HomeController@earlyYears')->name('earlyYears');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/primary', 'HomeController@primary')->name('primary');
Route::get('/extra-curricular', 'HomeController@extraCurricular')->name('extraCurricular');
Route::get('/calendar', 'HomeController@calendar')->name('calendar');
Route::get('/handbook', 'HomeController@handbook')->name('handbook');

/* the admin route*/

Route::get('/home', 'HomeController@adminHome')->name('adminhome');

// category
Route::post('/create/event-category', 'PixCategoryController@create');
Route::get('/edit/event-category/{id}', 'PixCategoryController@edit');
Route::post('/update/event-category/{id}', 'PixCategoryController@update');
Route::get('/delete/event-category/{id}', 'PixCategoryController@delete');
Route::get('/index/event-category', 'PixCategoryController@index');


//Pix
Route::post('/create/upload', 'PixController@create');
Route::get('/pix/index', 'PixController@index');
Route::get('/pix/delete/{id}', 'PixController@delete');




