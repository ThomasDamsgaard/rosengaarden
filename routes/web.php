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

//Guest routes
Route::get('/', 'Guest\GuestController@frontpage')->name('frontpage');
Route::get('/symptomer-og-behandling', 'Guest\GuestController@symptoms')->name('symptoms');
Route::get('/boernekiropraktik', 'Guest\GuestController@children')->name('children');
Route::get('/fysioterapi-og-massage', 'Guest\GuestController@physiotherapy')->name('physiotherapy');
Route::get('/kontakt', 'Guest\GuestController@contact')->name('contact');
Route::get('/personale', 'Guest\GuestController@who')->name('who');
Route::get('/information', 'Guest\GuestController@info')->name('info');
Route::get('/priser', 'Guest\GuestController@prices')->name('prices');
Route::get('/video', 'Guest\GuestController@video')->name('video');
Route::get('/blog', 'Blog\BlogController@index')->name('blog');

//Auth routes
Auth::routes();

//User routes
Route::get('/home', 'HomeController@index')->name('home');

//Blog routes
Route::get('blog/{slug}', 'Blog\BlogController@show')->name('blog.show');
// Route::get('/blog/create', 'Blog\BlogController@create')->middleware('auth');
// Route::get('/blog/{slug?}', 'Blog\BlogController@show')->name('show');
// Route::resource('blog', 'Blog\BlogController')
//   ->except(['index', 'show'])
//   ->middleware('auth');
