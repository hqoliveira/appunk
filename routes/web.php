<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/login', function(){
    return view('login');
})->name('login');

Route::middleware('auth')->group(function(){
    Route::resource('team', 'TeamController');
    Route::resource('scale', 'ScaleController');
    Route::resource('events', 'EventsController');
    Route::resource('users', 'UsersController');
    Route::resource('register', 'RegisterController');
});


Auth::routes(['register' => false]);

Route::redirect('/', 'home')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
