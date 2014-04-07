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


Route::group(array('before' => 'auth'), function(){


	Route::get('user/profile', function(){
		return "User profile page";
	});


});


Route::get('/', function()
{
	
	//$headers['Content-Type'] = 'application/json; charset=utf-8';
	//$results = DB::select('select * from posts where id = ?', array(1));
 
	return View::make('hello');
	 
});


Route::resource('nerds', 'NerdController');









 

 