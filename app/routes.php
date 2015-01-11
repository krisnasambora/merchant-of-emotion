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
Route::any('the-beginning-of-sunset-deity/stories', array('as' =>'the-beginning-of-sunset-deity/stories', function(){
	return View::make('sunset.the-beginning-of-sunset-deity-stories');
}));
Route::any('the-beginning-of-sunset-deity/store', array('as' =>'the-beginning-of-sunset-deity/store', function(){
	return View::make('sunset.the-beginning-of-sunset-deity-store');
}));
Route::any('the-beginning-of-sunset-deity/padipay', array('as' =>'the-beginning-of-sunset-deity/padipay', function(){
	return View::make('sunset.the-beginning-of-sunset-deity-moexpadipay');
}));
Route::get('the-beginning-of-sunset-deity/01', array('as' =>'the-beginning-of-sunset-deity/01', 'uses' => 'SunsetController@showTBSD01'));
Route::get('the-beginning-of-sunset-deity/01-m', array('as' =>'the-beginning-of-sunset-deity/01-m', 'uses' => 'SunsetController@showTBSD01m'));
Route::get('the-beginning-of-sunset-deity/02', array('as' =>'the-beginning-of-sunset-deity/02', 'uses' => 'SunsetController@showTBSD02'));
Route::get('the-beginning-of-sunset-deity/02-horizon', array('as' =>'the-beginning-of-sunset-deity/02-horizon', 'uses' => 'SunsetController@showTBSD02horizon'));
Route::get('the-beginning-of-sunset-deity/02-m-a', array('as' =>'the-beginning-of-sunset-deity/02-m-a', 'uses' => 'SunsetController@showTBSD02ma'));
Route::get('the-beginning-of-sunset-deity/02-m-b', array('as' =>'the-beginning-of-sunset-deity/02-m-b', 'uses' => 'SunsetController@showTBSD02mb'));
Route::get('the-beginning-of-sunset-deity/02-m-c', array('as' =>'the-beginning-of-sunset-deity/02-m-c', 'uses' => 'SunsetController@showTBSD02mc'));
Route::get('the-beginning-of-sunset-deity/02-m-d', array('as' =>'the-beginning-of-sunset-deity/02-m-c', 'uses' => 'SunsetController@showTBSD02md'));

Route::post('newtbsdsub', 'HomesiteController@insertNewSubscriber');

/*Route::any('the-beginning-of-sunset-deity/tickets-new', array('as' =>'the-beginning-of-sunset-deity/tickets-new', function(){
	return View::make('sunset.the-beginning-of-sunset-deity-tickets-new');
}));*/

Route::group(array('before' => 'tbsd_admins'), function()
{
	Route::any('the-beginning-of-sunset-deity/tickets', array('as' =>'the-beginning-of-sunset-deity/tickets', function(){
		return View::make('sunset.the-beginning-of-sunset-deity-tickets');
	}));
	Route::post('new_TBSD_order', 'SunsetController@insertNewTBSDorder');

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



