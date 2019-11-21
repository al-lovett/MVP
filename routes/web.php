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

Route::get('/addcompany', function () {
    return view('addcompany');
});

Route::post('/add', 'ServicesController@create');

Route::get('/pk1', function () {
    return view('pk1');
});

Route::get('/pk2', function () {
    return view('pk2');
});

Route::get('/pk3', function () {
    return view('pk3');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
