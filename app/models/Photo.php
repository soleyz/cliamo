<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Photo extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'photos';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	

	public function uploadPhoto()
	{
		$image = Input::file('image');
		// $photo = new Photo();
		$destinationPath = 'public/uploads/';
		$filename = $image->getClientOriginalName();
		$filename = date('Ymd').date('His').$filename;
		Input::file('image')->move($destinationPath, $filename);
	    $path = $destinationPath.$filename;
		// $photo = new Photo();
		$this->name = $path;
		$this->user_id = Auth::User()->id;
		$this->save();
		return $this;

	}
	public function androidUploadPhoto($imageKeep,$filenameKeep,$useridKeep)
	{
		$image = $imageKeep;//Input::file('image');
		$filename = $filenameKeep;
		$id = (int)$useridKeep;
		// $photo = new Photo();
		$decodedImage = base64_decode($image);
		
		$destinationPath = 'public/uploads/';
		// $filename = $image->getClientOriginalName();
		$filename = date('Ymd').date('His').$filename;
		
		file_put_contents("public/uploads/" .$filename, $decodedImage);
		// Input::file('image')->move($destinationPath, $decodedImage);
	    $path = $destinationPath.$filename;
		$photo = new Photo();
		$this->name = $path;
		// $thiis->name = "path";
		// $this->user_id = Auth::User()->id;
		// $this->user_id = $id;
		$this->user_id = $id;
		$this->save();
		return $this;

	}
	// public function edit(){
	// 	$id = Input::get('id');
	// 	$user = User::find($id);
	// 	$user->name =Input::get('name'); 
	// 	$user->age =Input::get('age');
	// 	$user->weight =Input::get('weight');
	// 	$user->height =Input::get('height');
	// 	$user->gender =Input::get('gender');
	// 	$user->email =Input::get('email');
	// 	$weightForCal=Input::get('weight');
	// 	$heightForCal=Input::get('height');
	// 	if($user->gender=="Male")
	// 	{
 //  			$user->caloriesForOneDay=370+(21.6*((0.32810 * $user->weight)+(0.33929 * $user->height)-29.5336) );
 //  		}
 //  		else{
 //  			$user->caloriesForOneDay=370+(21.6*((0.29569 * $user->weight)+(0.42813 * $user->height)-43.2933) );
 //  		}
	// 	$user->save();
	// 	return Redirect::to('info');
	// }
	public function findNearest($id){

		// $json_url = 'https://maps.googleapis.com/maps/api/directions/json?origin=13.728630,100.775981&destination=13.728672,100.777617&key=AIzaSyClhksq3Et61KA1jIamneSZqpHEgi8_9yk';
		// $json = file_get_contents($json_url);
		// $obj = json_decode($json);
		// // echo $obj->routes[0]->legs[0]->duration->value;
		// var_dump($obj->routes[0]->legs[0]->duration->value);
		// return "eee";
		
		$userId=(int)$id;
		// return $userId;
		// $userThatCall = DB::table('users')->where('id',)->get();
		// return $userId;
		$userThatCall = DB::table('users')->where('id',$userId)->get();
		// return $userThatCall;
		foreach ($userThatCall as $userCall) {
			$originLatitude = $userCall->latitude; //13.728630;
			$originLongtitude = $userCall->longtitude;//100.775981;	
		}
		// return $originLatitude."   ".$originLongtitude;
		// return $originLatitude."   ".$originLongtitude;
		//echo $originLatitude."   ".$originLongtitude."   ";//13.721435 100.771571
		// $userThatCall = DB::table('users')->where('id',$_POST["id"])->get();

		// $originLatitude = $userThatCall->latitude; //13.728630;
		// $originLongtitude = $userThatCall->longtitude;//100.775981;
		// $users = DB::table('users')->select('id','latitude', 'longtitude')->where('checktype',0)->where('available',1)->get();
		$users = DB::table('users')->select('id','latitude', 'longtitude')->where('checktype',0)->where('id',1)->where('available',1)->get();
		// return $users;

		$timeKeeper = array();
		$dataKeeper = array();
		foreach ($users as $user) {
		
			$json_url = 'https://maps.googleapis.com/maps/api/directions/json?origin='.$originLatitude.','.$originLongtitude.'&destination='.$user->latitude.','.$user->longtitude.'&key=AIzaSyClhksq3Et61KA1jIamneSZqpHEgi8_9yk';
			
			$json = file_get_contents($json_url);
			 
			$obj = json_decode($json);
			// echo $obj->routes[0]->legs[0]->duration->value."eiei";
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
		$officerDetail = DB::table('users')->where('id',$minId)->get();
		foreach ($officerDetail as $officerData) {
			$officerToken = $officerData->token; //13.728630;
		}
		$sendMessage = "notificationOfficer";
		$sendNoti = new Photo;
		$sendNoti->sendNotificationToOfficer($officerToken,$originLatitude,$originLongtitude,$sendMessage);
		return $minId;
		// return json_encode($minId);
	}

	public function sendNotificationToOfficer($token,$latitude,$longtitude,$sendMessage){
		$json_url = 'https://gcm-http.googleapis.com/gcm/send';
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
		return json_encode("dataKeep");

	}

}
