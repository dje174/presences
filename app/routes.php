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

Route::bind('students',function($value,$route)
{
	return Student::where('slug','=',$value)->first();
});

Route::bind('courses',function($value,$route)
{
	return Course::where('slug','=',$value)->first();
});

//Route::model('students','Student');

Route::resource('home', 'HomeController');

Route::resource('users', 'UserController');
Route::get('/', array('as' => 'login','uses' => 'UserController@login'))->before('guest');
Route::post('login', array('as' => 'connect', 'uses' => 'UserController@connect'))->before('guest');
Route::get('logout', array('as' => 'logout', 'uses' => 'UserController@logout'))->before('auth');

Route::resource('courses', 'CourseController');
Route::resource('students', 'StudentController');

// Route::get('/students/{students}',function($students){
// 	return $students;
// 	//return Student::where('slug','=',$slug)->first();
// });

// Route::get('/',function(){
// 	return User::find(1);
// });