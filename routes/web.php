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
Route::get('/how_to_contact','GetSidelineController@howtocontact')->name('howtocontact');
Route::get('/detail_sideline','GetSidelineController@detail_sideline')->name('detail_sideline');
Route::get('/signin','GetSidelineController@signin_sideline')->name('signin_sideline');
