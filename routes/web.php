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

Route::get('/', 'PagesController@index');

Route::get('/index', 'PagesController@index');

Route::get('/register', 'PagesController@CustReg');
Route::get('/login', 'PagesController@CustLogin');

Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::get('/services', 'PagesController@services');

Route::get('/home', 'PagesController@cusDash');

Route::get('/hello', function () {
    return '<h1> hello </h1>';
});



Route::get('/users/{id}', function ($id) {
    return 'this is user '.$id;
});

Route::get('/users/{id}/{name}', function ($name, $id) {
    return 'this is user '.$name.' with id '.$id;
});

Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
