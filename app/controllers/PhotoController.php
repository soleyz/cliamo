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

	// public function findNearest($id){

	// 	// $json_url = 'https://maps.googleapis.com/maps/api/directions/json?origin=13.728630,100.775981&destination=13.728672,100.777617&key=AIzaSyClhksq3Et61KA1jIamneSZqpHEgi8_9yk';
	// 	// $json = file_get_contents($json_url);
	// 	// $obj = json_decode($json);
	// 	// // echo $obj->routes[0]->legs[0]->duration->value;
	// 	// var_dump($obj->routes[0]->legs[0]->duration->value);
	// 	// return "eee";
		
	// 	// $userThatCall = DB::table('users')->where('id',$id)->get();
	// 	$userThatCall = DB::table('users')->where('id',$id)->get();
	// 	foreach ($userThatCall as $userCall) {
	// 		$originLatitude = $userCall->latitude; //13.728630;
	// 		$originLongtitude = $userCall->longtitude;//100.775981;	
	// 	}
	// 	// return $originLatitude."   ".$originLongtitude;
	// 	//echo $originLatitude."   ".$originLongtitude."   ";//13.721435 100.771571
	// 	// $userThatCall = DB::table('users')->where('id',$_POST["id"])->get();

	// 	// $originLatitude = $userThatCall->latitude; //13.728630;
	// 	// $originLongtitude = $userThatCall->longtitude;//100.775981;
	// 	// $users = DB::table('users')->select('id','latitude', 'longtitude')->where('checktype',0)->where('available',1)->get();
	// 	$users = DB::table('users')->select('id','latitude', 'longtitude')->where('checktype',0)->where('id',1)->where('available',1)->get();
	// 	$timeKeeper = array();
	// 	$dataKeeper = array();
	// 	foreach ($users as $user) {
		
	// 		$json_url = 'https://maps.googleapis.com/maps/api/directions/json?origin='.$originLatitude.','.$originLongtitude.'&destination='.$user->latitude.','.$user->longtitude.'&key=AIzaSyClhksq3Et61KA1jIamneSZqpHEgi8_9yk';
			
	// 		$json = file_get_contents($json_url);
			 
	// 		$obj = json_decode($json);
	// 		// echo $obj->routes[0]->legs[0]->duration->value."eiei";
	// 		array_push($timeKeeper,$user->id,$obj->routes[0]->legs[0]->duration->value);
	// 		array_push($dataKeeper,$timeKeeper);
	// 		$timeKeeper = array();
	// 	}
	// 	$arrayMin = array();

	// 	$minDuration = 100000000;
	// 	$minId = 0;
	// 	foreach ($dataKeeper as $data) {
			
	// 		if($minDuration>$data[1]){
	// 			$minDuration = $data[1];
	// 			$minId = $data[0];
	// 		}
			
		
	// 	}
	// 	return $minId;
	// 	// return json_encode($minId);
	// }
	public function androidMakeClaim(){

		$imageKeep = $_POST["image"];
		$filenameKeep = $_POST["name"];
		$useridKeep = $_POST["id"];
		$idKeep = (int)$useridKeep;
		$photo = new Photo();
		// return $idKeep;
		$officerIdNearest = $photo->findNearest($idKeep);
		// return $officerIdNearest;
		$officerDetail = DB::table('users')->where('id',$officerIdNearest)->get();
		// $officerDetail = DB::table('users')->where('id',1)->get();
		// return $officerDetail;
		// $officerToken = "eiei";
		foreach ($officerDetail as $officerData) {
			$officerId = $officerData->id;
			$officerToken = $officerData->token; //13.728630;
			$officerLat = $officerData->latitude;
			$officerLng = $officerData->longtitude;
		}
		// return $officerToken;
		$photo->androidUploadPhoto($imageKeep,$filenameKeep,$useridKeep);

		$result = array();

		// $result["result"] = "Upload Complete!";
		// $result["token"]= $officerToken;
		$claim = new Claim();

		$claim->androidCreateClaim($idKeep,$officerId);

		$claimid = $claim->id;
		$photoid = $photo->id;

		$claimphotouser = new ClaimPhotoUser();
		$claimphotouser->androidSaveClaimPhotoUser($claimid,$photoid,$idKeep);
		$keepData = array("token"=>$officerToken,"latitude"=>$officerLat,"longtitude"=>$officerLng);
		$userOfficer = new UserOfficer();
		$userOfficer->keepId($useridKeep,$officerId,$claimid);
		return  json_encode($keepData);
	}

	public function sendNotificationToOfficer(){
		$json_url = 'https://gcm-http.googleapis.com/gcm/send';
		$token = $_POST["token"];
		$latitude = $_POST["latitude"];
		$longtitude = $_POST["longtitude"];
		$sendMessage = $_POST["sendMessage"];
		$dataKeep=array(
			'to' => $token,
			'data' => array(
				'latitude' => $latitude,
				'message' => $sendMessage,
				'longtitude' => $longtitude
				)
			);
		$bodyData=json_encode($dataKeep);
		$opts = array('http' =>
		    array(
		        'method'  => "POST",
		        'header'  => "Authorization: key=AIzaSyDe89QYFGCQLx_7oYJBDEp8k-HOvdH_ZXw\r\n" . "Content-Type: application/json\r\n",
		        'content' => $bodyData
		    )
		);

		$context  = stream_context_create($opts);
		$result = file_get_contents($json_url,false,$context);
		return json_encode($dataKeep);

	}
	
}
