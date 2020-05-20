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
Route::get('/users/create', 'UserController@create')->name('users/create');

// Trainings route
Route::get('/trainings', 'TrainingController@index')->name('trainings/index');
Route::get('/training/show/{training}', 'TrainingController@show')->name('trainings/show');
<<<<<<< HEAD

// Sessions routes
Route::get('/sessions', 'SessionController@index')->name('sessions/index');
Route::get('/session/show/{session}', 'SessionController@show')->name('session/show');
=======
Route::get('/trainings/create', 'TrainingController@create')->name('trainings/create');
Route::post('/trainings/store', 'TrainingController@store')->name('trainings/store');

// Sessions routes
Route::get('/sessions', 'SessionController@index')->name('sessions/index');
Route::get('/session/show/{session}', 'SessionController@show')->name('sessions/show');
>>>>>>> 6cf9daf8a3bfa66c865daf1e5c668ed165b40e1b
Route::get('/sessions/create', 'SessionController@create')->name('sessions/create');
Route::post('/sessions/store', 'SessionController@store')->name('session/store');
Route::get('/session/edit', 'SessionController@edit')->name('sessions/edit');
Route::post('/session/update', 'SessionController@update')->name('sessions/update');

<<<<<<< HEAD

=======
// Rooms routes
Route::get('/rooms', 'RoomController@index')->name('rooms/index');
Route::get('/room/show/{room}', 'RoomController@show')->name('rooms/show');
>>>>>>> 6cf9daf8a3bfa66c865daf1e5c668ed165b40e1b
