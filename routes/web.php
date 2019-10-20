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

// things foward of @ means a method
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::get('/spoiler', function () {
    return 'voce nao devia estar aqui';
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/users/{id}/{name}', function($id, $name) {
    return 'This is user ' . $name . ' with a Id of ' . $id;
});
