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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/jobs', 'JobController@index')->name('job.index');
Route::get('/jobs/{id}', 'JobController@show')->name('job.show');
Route::post('/jobs/apply/{id}', 'JobController@apply')->name('job.apply');

Route::get('/categories/{id}', 'CategoryController@index')->name('category.index');
Route::get('/categories/titles/{id}', 'CategoryController@titles')->name('category.titles');

Route::get('/cities/{id}', 'CityController@index')->name('city.index');

Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/contact', 'ContactController@store')->name('contact.store');

Route::get('/sessions', 'SessionController@index')->name('session.index');
Route::get('/sessions/{id}', 'SessionController@show')->name('session.show');
//session.reserve
Route::post('/sessions/reserve', 'SessionController@reserve')->name('session.reserve');

Route::middleware('auth')->prefix('dashboard')->group(function () {
  Route::get('index', 'UserController@index');
  Route::get('applied', 'UserController@applied');
  Route::get('sessions', 'UserController@sessions');
  Route::get('invoice/{id}/sessions', 'UserController@invoice');
  Route::get('edit', 'UserController@edit');


    }
);
   

