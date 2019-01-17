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

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/search', 'EventsController@searc');