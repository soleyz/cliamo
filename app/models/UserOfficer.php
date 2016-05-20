<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class UserOfficer extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users_officers';


	
	public function keepId($userId,$officerId,$claimId)
	{

		$userOfficer = new UserOfficer();
		$userOfficer->user_id =$userId;
		$userOfficer->officer_id =$officerId;
		$userOfficer->claim_id = $claimId;
		$userOfficer->save();

	}
	

}
