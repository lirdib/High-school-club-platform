<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;


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

Auth::routes();
//view getters

Route::get('/', 'App\Http\Controllers\MainController@index');//main screen before login
Route::get('/home','App\Http\Controllers\HomeController@index')->name('home')->middleware('auth'); //home screen after login
Route::get('/klubet', 'App\Http\Controllers\ClubController@index')->name('clubs'); //clubs view
Route::get('/klubet/{id}', 'App\Http\Controllers\ClubController@specificClub')->name('specificClubs'); //requested club view
Route::get('/eventet', 'App\Http\Controllers\EventController@index')->name('event'); // events view
Route::get('/eventet/{id}', 'App\Http\Controllers\EventController@specificEvent')->name('specificEvent'); //requested event view
Route::get('/kontakt', 'App\Http\Controllers\ContactUsController@index');
Route::post('/kontaktsend', 'App\Http\Controllers\ContactUsController@send');
Route::get('/feedback', 'App\Http\Controllers\FeedbackController@index'); //requested event view
Route::get('klubet/c/create', 'App\Http\Controllers\ClubController@create');
Route::post('klubet/c', 'App\Http\Controllers\ClubController@store');
Route::get('/klubet/{id}/k/create','App\Http\Controllers\ProjectsController@create');
Route::post('/klubet/{id}/k','App\Http\Controllers\ProjectsController@store');
Route::get('/e/create','App\Http\Controllers\EventController@create');
Route::post('/e','App\Http\Controllers\EventController@store');

//Dashboard  /dashboard/kerkesat
Route::get('/dashboard', 'App\Http\Controllers\User\DashboardController@index')->name('dashboard');
Route::get('/dashboard/projectForm', 'App\Http\Controllers\User\DashboardController@projectForm')->name('dashboard.project_form.create');
Route::get('/dashboard/kerkesat', 'App\Http\Controllers\User\DashboardController@kerkesat')->name('dashboard');
Route::post('/dashboard/projectForm', 'App\Http\Controllers\User\DashboardController@store');



Route::get('/k/create','App\Http\Controllers\ProjectsController@create');
Route::post('/k','App\Http\Controllers\ProjectsController@store');
Route::get('/klubet/{id}/projects/{idp}','App\Http\Controllers\SpecificProjectController@specificProject');//specificProject
