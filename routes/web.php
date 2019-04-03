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
Route::get('/', function () {
    return view('welcome');
})->name('frontpage');

Route::get('/symptomer-og-behandling', function () {
    return view('guest.chiropractor.symptoms_and_treatment');
})->name('symptoms');

Route::get('/boernekiropraktik', function () {
    return view('guest.chiropractor.children');
})->name('children');

Route::get('/fysioterapi-og-massage', function () {
    return view('guest.physiotherapy');
})->name('physiotherapy');

Route::get('/kontakt', function () {
    return view('guest.contact.contact_info');
})->name('contact');

Route::get('/hvem-er-vi', function () {
    return view('guest.contact.who_are_we');
})->name('who');

Route::get('/blog', 'Blog\BlogController@index')->name('blog');

Route::get('/links', function () {
    return view('guest.links');
})->name('links');

//Auth routes
Auth::routes();

//User routes
Route::get('/home', 'HomeController@index')->name('home');

//Blog routes
Route::get('/blog/create', 'Blog\BlogController@create')->middleware('auth');
Route::get('/blog/{slug?}', 'Blog\BlogController@show')->name('show');
Route::resource('blog', 'Blog\BlogController')
  ->except(['index', 'show'])
  ->middleware('auth');
