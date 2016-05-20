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
	public function androidCreateClaim($idKeep,$idOfficer)
	{
		
		$this->user_id = $idKeep;
		$this->officer_id = $idOfficer;
		$this->save();
	}
	public function edit(){
		$id = Input::get('id');
		// $id = 146;
		$claim = Claim::find($id);
		$claim->incidentdriver =Input::get('incidentdriver'); 
		$claim->incidentdriverage =Input::get('incidentdriverage');
		$claim->insuranceholder = Input::get('insuranceholder');
		$claim->relationshiptopolicyholder = Input::get('relationshiptopolicyholder');
		$claim->causeofaccident = Input::get('causeofaccident');
		$claim->incidentaddress = Input::get('incidentaddress');
		$claim->incidenttelnumber = Input::get('incidenttelnumber');
		$claim->partyatfault = Input::get('partyatfault');
		$claim->notificationnumber =  Input::get('notificationnumber');
		$claim->claimnumber = Input::get('claimnumber');
		$claim->incidentdrivinglicensenumber = Input::get('incidentdrivinglicensenumber');
		$claim->issuedat = Input::get('issuedat');
		$claim->issueddate = Input::get('issueddate');
		$claim->damageofvehicle = Input::get('damageofvehicle');
		$claim->levelofdamage = Input::get('levelofdamage');
		$claim->ownername = Input::get('ownername');
		$claim->ownertelephonenumber = Input::get('ownertelephonenumber');
		$claim->ownercarplatenumber = Input::get('ownercarplatenumber');
		$claim->ownermakeandmodel = Input::get('ownermakeandmodel');
		$claim->ownerinsurance = Input::get('ownerinsurance');
		$claim->ownerinsurancetype = Input::get('ownerinsurancetype');
		$claim->policynumber = Input::get('policynumber');
		$claim->drivername = Input::get('drivername');
		$claim->driverage = Input::get('driverage');
		$claim->relationtoowner = Input::get('relationtoowner');
		$claim->driveraddress = Input::get('driveraddress');
		$claim->drivertelnumber = Input::get('drivertelnumber');
		$claim->driverdrivinglicensenumber = Input::get('driverdrivinglicensenumber');
		$claim->driverlicenseissuedat = Input::get('driverlicenseissuedat');
		$claim->driverlicenseissueddate = Input::get('driverlicenseissueddate');
		$claim->damageofthirdpartyvehicle = Input::get('damageofthirdpartyvehicle');
		$claim->injureddetail = Input::get('injureddetail');
		$claim->hospital = Input::get('hospital');
		$claim->doctorname = Input::get('doctorname');
		$claim->witnessname = Input::get('witnessname');
		$claim->witnesstelnumber = Input::get('witnesstelnumber');
		$claim->witnessaddress = Input::get('witnessaddress');
		$claim->save();
		//return Redirect::to('claimlist');
	}

}
