<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('home', 'HomeController');

Route::resource('users', 'UserController');
Route::get('login', array('as' => 'login','uses' => 'UserController@login'))->before('guest');
Route::post('login', array('as' => 'connect', 'uses' => 'UserController@connect'))->before('guest');
Route::get('logout', array('as' => 'logout', 'uses' => 'UserController@logout'))->before('auth');

Route::resource('courses', 'CourseController');
Route::resource('students', 'StudentController');

Route::get('/',function(){
	return User::find(1);
});