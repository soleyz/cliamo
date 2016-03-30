<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Claim extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'claim';



	public function createClaim()
	{
		
		$this->user_id = Auth::User()->id;
		$this->save();
	}
	public function edit(){
		$id = Input::get('id');
		$claim = Claim::find($id);
		$claim->incidentdriver =Input::get('incidentdriver'); 
		$claim->incidentdriverage =Input::get('incidentdriverage');
		$claim->officer_id = Auth::User()->id;
		// $claim->height =Input::get('height');
		// $claim->gender =Input::get('gender');
		// $claim->email =Input::get('email');
		$claim->save();
		//return Redirect::to('claimlist');
	}

}
