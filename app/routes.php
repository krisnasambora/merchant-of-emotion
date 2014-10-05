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
	return View::make('homesite.home');
}));

Route::get('about', array('as' =>'about', function(){
	return View::make('homesite.about');
}));

Route::get('collaborate', array('as' =>'collaborate', function(){
	return View::make('homesite.collaborate');
}));

Route::get('press', array('as' =>'press', function(){
	return View::make('homesite.press');
}));

Route::get('shop', array('as' =>'shop', function(){
	return View::make('homesite.shop');
}));

Route::get('social', array('as' =>'social', function(){
	return View::make('homesite.social');
}));

Route::post('newsubscriber', 'HomesiteController@insertNewSubscriber');


