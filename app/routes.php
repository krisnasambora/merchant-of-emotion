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
	return Redirect::to('the-beginning-of-sunset-deity/announcement');
}));

Route::any('the-beginning-of-sunset-deity/announcement', array('as' =>'the-beginning-of-sunset-deity/announcement', function(){
	return View::make('sunset.the-beginning-of-sunset-deity-announcement');
}));
Route::get('the-beginning-of-sunset-deity/01', array('as' =>'the-beginning-of-sunset-deity/01', 'uses' => 'SunsetController@showTBSD01'));
Route::get('the-beginning-of-sunset-deity/02', array('as' =>'the-beginning-of-sunset-deity/02', 'uses' => 'SunsetController@showTBSD02'));

Route::post('newtbsdsub', 'HomesiteController@insertNewSubscriber');


Route::any('the-beginning-of-sunset-deity/tickets', array('as' =>'the-beginning-of-sunset-deity/tickets', function(){
	return View::make('sunset.the-beginning-of-sunset-deity-tickets');
}));
Route::post('new_TBSD_order', 'SunsetController@insertNewTBSDorder');

Route::group(array('before' => 'tbsd_admins'), function()
{
	Route::get('ticketing', array('as' =>'ticketing', 'uses' => 'SunsetController@ticketing'));
	Route::get('delete_order/{name}/{phone}/{order_id}/{show_id}/{class}/{amount}/{mail}', array('as' =>'delete_order', 'uses' => 'SunsetController@deleteOrder'));
	Route::get('confirm_order/{name}/{phone}/{order_id}/{show_id}/{class}/{amount}/{mail}', array('as' =>'confirm_order', 'uses' => 'SunsetController@confirmOrder'));
});
Route::get('tbsd_admin/login', array('as' => 'tbsd_admin/login', 'uses' => 'SunsetController@showLoginPage'));
Route::post('tbsd_admin/store', array('as' => 'tbsd_admin/store', 'uses' => 'SunsetController@store'));
Route::get('tbsd_admin/destroy', array('as' => 'tbsd_admin/destroy', 'uses' => 'SunsetController@destroy'));

Route::any('the-beginning-of-sunset-deity/sub', array('as' =>'the-beginning-of-sunset-deity/sub', function(){
	return View::make('sunset.the-beginning-of-sunset-deity-sub');
}));



