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

Route::get('/maptest', function()
{	
	
	
		// $json_url = 'https://maps.googleapis.com/maps/api/directions/json?origin='.$originLatitude.','.$originLongtitude.'&destination='.$user->latitude.','.$user->longtitude.'&key=AIzaSyClhksq3Et61KA1jIamneSZqpHEgi8_9yk';
		// $json_url = 'https://maps.googleapis.com/maps/api/directions/json?origin=13.721716,100.770937&destination=13.721435,100.771571&key=AIzaSyClhksq3Et61KA1jIamneSZqpHEgi8_9yk';
		// $json = file_get_contents($json_url);
		// $obj = json_decode($json);
		// echo $obj->routes[0]->legs[0]->duration->value;//374
		$json_url = 'https://maps.googleapis.com/maps/api/directions/json?origin=13.722592,100.748528&destination=13.721435,100.771571&key=AIzaSyClhksq3Et61KA1jIamneSZqpHEgi8_9yk';
		$json = file_get_contents($json_url);
		$obj = json_decode($json);
		echo $obj->routes[0]->legs[0]->duration->value;
		
	
});

Route::get('/e', function()
{
	// $users = DB::table('users')->select('id','latitude', 'longtitude')->where('checktype',0)->get();
	// foreach ($users as $user) {
		
	// 	echo $user->latitude." ".$user->longtitude.",";
	// }
	$userThatCall = DB::table('users')->where('id',2)->get();
	foreach ($userThatCall as $user) {
		# code...
		echo $user->firstname;
	}
	// echo $userThatCall->id;
	// var_dump($userThatCall);
	
});
Route::get('/j', function()
{	
	// $destinationLatitude = 13.728672 ;
	// $destinationLongtitude = 100.777617;
	// $originLatitude = 13.728630;//13.722416 100.736125
	// $originLongtitude = 100.775981;
	$originLatitude = 13.722416;
	$originLongtitude = 100.736125;
	$users = DB::table('users')->select('id','latitude', 'longtitude')->where('checktype',0)->get();
	$timeKeeper = array();
	$dataKeeper = array();
	foreach ($users as $user) {
	
		$json_url = 'https://maps.googleapis.com/maps/api/directions/json?origin='.$originLatitude.','.$originLongtitude.'&destination='.$user->latitude.','.$user->longtitude.'&key=AIzaSyClhksq3Et61KA1jIamneSZqpHEgi8_9yk';
		
		$json = file_get_contents($json_url);
		 
		$obj = json_decode($json);
		array_push($timeKeeper,$user->id,$obj->routes[0]->legs[0]->duration->value);
		array_push($dataKeeper,$timeKeeper);
		$timeKeeper = array();
	}
	$arrayMin = array();

	$minDuration = 100000000;
	$minId = 0;
	foreach ($dataKeeper as $data) {
		
		if($minDuration>$data[1]){
			$minDuration = $data[1];
			$minId = $data[0];
		}
	
	}
	echo $minId."   ".$minDuration;
	
});
Route::get('/ee', function()
{
	// $firstname = DB::table('users')->where('id','5');
	// for($i=0;$i<count($firstname);$i++){ 
 //              echo '<th>'.$firstname[$i]->id;
 //              echo '<td>'.$firstname[$i]->firstname;
 //    }

	//return View::make('testTemplate');
	// return View::make('hello');
	$users = DB::table('users')->get();

foreach ($users as $user)
{
    var_dump($user->firstname);
}
});

Route::get('signup','SignupController@show');
Route::post('signup','SignupController@signup');
Route::get('register','SignupController@showregister');
Route::post('register','SignupController@register');
Route::get('signin','SigninController@showSignin');
Route::post('signin','SigninController@doSignin');
Route::get('officerinfo','SigninController@showInfo');
Route::get('userinfo','SigninController@showUserInfo');

Route::post('sentToken','ClaimController@sentToken');

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
Route::get('/near', 'PhotoController@findNearest');//test for get some return

Route::get('makeclaim','ClaimController@showClaim');
Route::post('makeclaim','ClaimController@makeClaim');

Route::get('claimlist','ClaimController@showClaimList');

Route::get('editclaim/{id}','ClaimController@showEditClaimList');
Route::post('editclaim/{id}','ClaimController@editClaimList');

// Route::get('announcement/{ANNOUNCE_ID}','AnnouncementController@show');
Route::post('saveOfficerToken','SigninController@saveOfficerToken');

Route::post('androidSignin','SigninController@androidSignin');
Route::post('androidLogin','SigninController@androidLogin');
Route::post('androidupload', 'PhotoController@androidMakeClaim');
Route::post('sentLatLng','ClaimController@sentLatLng');
Route::post('sentnoti', 'PhotoController@sendNotificationToOfficer');
Route::post('sentClaimData','ClaimController@sentClaimData');


