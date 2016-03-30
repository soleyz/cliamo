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

Route::get('/', function()
{
	return View::make('test');
	// return View::make('hello');
});

Route::get('signup','SignupController@show');
Route::post('signup','SignupController@signup');
Route::get('register','SignupController@showregister');
Route::post('register','SignupController@register');
Route::get('signin','SigninController@showSignin');
Route::post('signin','SigninController@doSignin');
Route::get('officerinfo','SigninController@showInfo');
Route::get('userinfo','SigninController@showUserInfo');


Route::get('test','SignupController@test');
Route::get('signout', 'SigninController@doSignout');
Route::get('logout', 'SigninController@doLogout');

Route::get('login','SigninController@showLogin');
Route::post('login','SigninController@doLogin');
// Route::get('userlocation,SigninController@showUserLocation');
Route::get('userlocation','SigninController@showUserLocation');
Route::get('/upload',function(){
	return View::make('uploadpic');
});

Route::post('/upload', 'PhotoController@makeClaim');

Route::get('makeclaim','ClaimController@showClaim');
Route::post('makeclaim','ClaimController@makeClaim');

Route::get('claimlist','ClaimController@showClaimList');

Route::get('editclaim/{id}','ClaimController@showEditClaimList');
Route::post('editclaim/{id}','ClaimController@editClaimList');

// Route::get('announcement/{ANNOUNCE_ID}','AnnouncementController@show');
