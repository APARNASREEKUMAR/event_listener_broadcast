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
Route::get('event',function(){
	event(new App\Events\TaskEvent('Hey We have a Task Event to be listened'));
});
Route::get('listen',function(){
	// return "here";
	return view ('listenBroadcast');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
