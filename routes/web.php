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
    return view('home');
});


Route::get('/football', function () {
    return view('football');
});

Route::get('/list', function () {
    return view('list');
});

Route::get('/location', function () {
    return view('location');
});


Route::get('/locatione', function () {
    return view('locatione');
});


Route::get('/', function () {
    return view('home');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/edit/{id}', 'EventsController@edit');

Route::put('/edit/update/{id}', 'EventsController@update');

Route::get('/delete/{id}', 'EventsController@delete');

Route::get('/events' , 'EventsController@getEvents');

Route::post('/football/add', 'EventsController@submit');
Auth::routes();


Route::get('/logout' ,'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/search', 'EventsController@searc');