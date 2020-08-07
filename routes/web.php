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

Route::get('/home', 'HomeController@home');
Route::get('/register', 'AuthController@register');
Route::post('/welcome', 'AuthController@welcome');

//templating task
Route::get('/', function() {
  return view('templating_task.index');
});

Route::get('/data_tables', function() {
  return view('templating_task.data_tables');
});
