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

Route::get('/', array('as' =>'/', function(){
	return Redirect::to('the-beginning-of-sunset-deity/01');
}));

Route::get('the-beginning-of-sunset-deity/01', array('as' =>'the-beginning-of-sunset-deity/01', function(){
	return View::make('sunset.the-beginning-of-sunset-deity-01');
}));

Route::any('the-beginning-of-sunset-deity/sub', array('as' =>'the-beginning-of-sunset-deity/sub', function(){
	return View::make('sunset.the-beginning-of-sunset-deity-sub');
}));

Route::post('newtbsdsub', 'SunsetController@insertTBSDsubscriber');
