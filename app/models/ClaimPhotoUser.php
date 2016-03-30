<?php


class ClaimPhotoUser extends Eloquent {
	protected $table ="claim_photo_user";

	
	//this method use to save relation of food and disease
	public function saveClaimPhotoUser($claimid,$photoid){
		// $claimphotouser = new ClaimPhotoUser();
		$this->claim_id =$claimid;
		$this->photo_id =$photoid ;
		$this->user_id = Auth::User()->id;
		$this->save();
	}
}