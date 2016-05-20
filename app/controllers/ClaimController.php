<?php

class ClaimController extends BaseController
{
	
	public function makeClaim()
	{		
		$claim = new Claim();
		$claim->makeClaim(Input::get('incidentdriver'),Input::get('incidentdriverage'));
		return Redirect::to('userinfo');
	}

	public function showClaim()
	{		
		return View::make('makeclaim');
	}
	public function showClaimList()
	{		
		return View::make('claimlist');
	}
	public function showEditClaimList($id)
	{		
		// return $id."naja";
		$claim = Claim::find($id);
		// return $claim."eiei";
		return View::make('editclaimlist')->with('claim',$claim);
	}
	public function editClaimList($id)
	{		
		$id = Input::get('id');
		// var_dump($id);
		// return $id;
		// $id = 146;
		$data = Claim::find($id);
		$data->edit();
		return Redirect::to('claimlist');
	}

	public function sentToken(){
		$json_url = 'https://gcm-http.googleapis.com/gcm/send';
		
		
		// $dataKeep=array(
		// 	'to' => $token,
		// 	'data' => array(
		// 		'latitude' => $latitude,
		// 		'message' => $message,
		// 		'longtitude' => $longtitude
		// 		)
		// 	);
		$dataKeep=array(
			'to' => 'et2AKMRCRKY:APA91bEFLzdWH_RMaBPE_7hcuhO30Rj9ixgoyiy4UPhyheOiDOAVpybXAm-R7DfO8PUTYc82K867ArTwSNxmJX0s1tjuC-gtBC7dsCdi82GatBTeM94ZnjV6xU9U7nvpjDMRmeRhV_pq',
			'data' => array(
				'eiei' => 'jack',
				'message' => 'sentToken',
				'test' => 'test'
				)
			);
		// $eiei=array(
		// 	'to' => 'et2AKMRCRKY:APA91bEFLzdWH_RMaBPE_7hcuhO30Rj9ixgoyiy4UPhyheOiDOAVpybXAm-R7DfO8PUTYc82K867ArTwSNxmJX0s1tjuC-gtBC7dsCdi82GatBTeM94ZnjV6xU9U7nvpjDMRmeRhV_pq',
		// 	'data' => array(
		// 		'eiei' => 'jack',
		// 		'message' => 'sentToken',
		// 		'test' => 'test'
		// 		)
		// 	);
		// return "eiei";
		$bodyData=json_encode($dataKeep);

// 		$postdata = http_build_query(
//     ""data": {
//     "eiei": "jack",
//     "message": "naja"
//     "test": "test"
//   	},
//   	"to" : "et2AKMRCRKY:APA91bEFLzdWH_RMaBPE_7hcuhO30Rj9ixgoyiy4UPhyheOiDOAVpybXAm-R7DfO8PUTYc82K867ArTwSNxmJX0s1tjuC-gtBC7dsCdi82GatBTeM94ZnjV6xU9U7nvpjDMRmeRhV_pq"
// ");

		$opts = array('http' =>
		    array(
		        'method'  => "POST",
		        'header'  => "Authorization: key=AIzaSyDe89QYFGCQLx_7oYJBDEp8k-HOvdH_ZXw\r\n" . "Content-Type: application/json\r\n",
		        'content' => $bodyData
		    )
		);

		$context  = stream_context_create($opts);
// $result = file_get_contents('http://example.com/submit.php', false, $context);
		$result = file_get_contents($json_url,false,$context);
		return json_encode("dataKeep");
	}


	public function sentLatLng(){
		
					$keepId = $_POST["id"];
					$id = (int)$keepId;
					$keepLatitude 	= $_POST["latitude"];
					$latitude = (double)$keepLatitude;
					$keepLongtitude = $_POST["longtitude"];
					$longtitude = (double)$keepLongtitude;
					$checkType = $_POST["checkType"];
					$tempCheckType = (int)$checkType;
					DB::table('users')
						->where('id',$id)
						->update (array('longtitude' => $longtitude,'latitude' => $latitude));
					if($checkType=="0"){
						$tmpUser = DB::table('users_officers')->where('officer_id',$id)->get();
						foreach ($tmpUser as $storeUser ) {
							$storeId = $storeUser->user_id;
						}
						$getUserData=DB::table('users')->where('id',$storeId)->get();
						foreach ($getUserData as $data) {
							$latitude = $data->latitude;
							$longtitude = $data->longtitude;
						}
						$user = array('latitude'=> $latitude,'longtitude' => $longtitude);
						return json_encode($user);

					}
					else if($checkType=="1"){
						$tmpUser = DB::table('users_officers')->where('user_id',$id)->get();
						foreach ($tmpUser as $storeUser ) {
							$storeId = $storeUser->officer_id;
						}
						$getUserData=DB::table('users')->where('id',$storeId)->get();
						foreach ($getUserData as $data) {
							$latitude = $data->latitude;
							$longtitude = $data->longtitude;
						}
						$user = array('latitude'=> $latitude,'longtitude' => $longtitude);
						return json_encode($user);
					}
			


	}

	public function sentClaimData (){
		$keepId = $_POST["id"];
		$id = (int)$keepId;//officerId
		// return $id;
		$dateOfAccident 	= $_POST["dateOfAccident"];
		// $latitude = (double)$keepLatitude;
		$violence = $_POST["violence"];
		// $longtitude = (double)$keepLongtitude;
		$list = $_POST["list"];
		// $tempCheckType = (int)$checkType;
		$tmpData = DB::table('users_officers')->where('claim_id',$id)->get();
		// return $tmpData;
		foreach ($tmpData as $storeData ) {
			$storeId = $storeData->claim_id;
		}
		DB::table('claim')->where('id',$storeId)->update(array('levelofdamage'=>$violence,'damageofvehicle'=>$list));
		DB::table('users_officers')->where('claim_id',$id)->delete();
		// DB::table('users')->where('id')
			return json_encode($tmpData);

	}
	// public function show($ANNOUNCE_ID)
	// {
	// 	//
	// 	$announcement = Announcement::find($ANNOUNCE_ID);
	// 	// return view('announcement.show',array('announcement'=>$announcement));
		
	// 	return $announcement;
	// }
}