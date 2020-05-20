<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Users
Route::get('/users', 'UserController@index')->name('users/index');
Route::get('/user/show/{user}', 'UserController@show')->name('user/show');
Route::post('/users/store', 'UserController@store')->name('user/store');

// Trainings route
Route::get('/trainings', 'TrainingController@index')->name('trainings/index');
Route::get('/training/show/{training}', 'TrainingController@show')->name('trainings/show');
// Sessions routes
Route::get('/sessions', 'SessionController@index')->name('sessions/index');
Route::get('/session/show/{session}', 'SessionController@show')->name('sessions/show');
// Rooms routes
Route::get('/rooms', 'RoomController@index')->name('rooms/index');
Route::get('/room/show/{room}', 'RoomController@show')->name('rooms/show');

// Create Users
Route::get('/users/create', 'UserController@create')->name('users/create');
