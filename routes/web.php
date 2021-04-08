<?php

use Illuminate\Support\Facades\Auth;
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

Route::resource('threads','ThreadsController')->except([
    'show'
]);
Route::get('threads/{channel}/{thread}','ThreadsController@show')->name('thread-show');

Route::post('/threads/{thread}/replies','RepliesController@store')->name('add-reply');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
