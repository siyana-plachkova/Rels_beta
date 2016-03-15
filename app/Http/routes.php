<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    if (Auth::check())
    {
        return redirect('profile');
    }
    return view('index');
});
Route::get('/home', function () {
    return redirect('/');
});

Route::get('/registration', 'Auth\AuthController@index');
Route::post('/registration', 'Auth\AuthController@register');
Route::get('/auth/login', function() {
    return redirect('/');
});
Route::post('/auth/login', 'Auth\AuthController@login');
Route::get('/auth/logout', 'Auth\AuthController@logout');

Route::get('/profile', 'UserController@profile');
Route::get('/profile/{id}', 'UserController@profile');
Route::post('/profile/images/add', 'UserController@add_image');

Route::post('/search', 'UserController@search');

Route::get('/messages', function() {
    return view('messages');
});