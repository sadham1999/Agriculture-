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

Route::get('/logo', function () {
    return view('logo');
});
Route::get('/homes', function () {
    return view('homes');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/main', function () {
    return view('main');
});
Auth::routes();


Route::match(['get', 'post'], '/botman', 'BotManController@handle');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/upload', 'HomeController@upload');

Route::get('/flag/{id}', 'HomeController@flag');

Route::post('/comment/{id}', 'HomeController@comment');

Route::post('/search', 'HomeController@search');
Route::get('/delete/{id}', 'HomeController@delete');