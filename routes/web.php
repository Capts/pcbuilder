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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@dashboard')->name('dash');
Route::get('/components/all-components', 'ComponentsController@index')->name('component.index');
Route::resource('/component', 'ComponentsController', ['except' => ['index']]);

//manual route
Route::get('/build-my-pc-manually', 'ManualController@index')->name('manual.index');

//system builds
Route::resource('system-build', 'SystemBuildController');
