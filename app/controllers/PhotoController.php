<?php

class PhotoController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}
	
	public function makeClaim(){
    
	// $image = Input::file('image');
	$photo = new Photo();
	// $destinationPath = 'public/uploads/';
	// $filename = $image->getClientOriginalName();
	// $filename = date('Ymd').date('His').$filename;
	// Input::file('image')->move($destinationPath, $filename);
 //    $path = $destinationPath.$filename;
	 $photo->uploadPhoto();

	$claim = new Claim();
	
	$claim->createClaim();

	$claimid = $claim->id;
	$photoid = $photo->id;
	// return $claim->id."eiei".$photoid;
	// $claim->createClaim();
	// $claim->user_id = Auth::User()->id;
	// $claim->incidentdriver = $incidentdriver;
	// $claim->incidentdriverage = $incidentdriverage;
	$claimphotouser = new ClaimPhotoUser();
	$claimphotouser->saveClaimPhotoUser($claimid,$photoid);
	// $claimphotouser->claim_id =$claim_id;
	// $claimphotouser->photo_id =$photo_id ;
	// $claimphotouser->user_id = Auth::User()->id;
	// $claimphotouser->save();

	return View::make('userinfo');//->with('claim',$claim);
	}

}
