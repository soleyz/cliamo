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
		$claim = Claim::find($id);
		return View::make('editclaimlist')->with('claim',$claim);
	}
	public function editClaimList()
	{		
		$id = Input::get('id');
		
		$data = Claim::find($id);
		$data->edit();
		return Redirect::to('claimlist');
	}
	// public function show($ANNOUNCE_ID)
	// {
	// 	//
	// 	$announcement = Announcement::find($ANNOUNCE_ID);
	// 	// return view('announcement.show',array('announcement'=>$announcement));
		
	// 	return $announcement;
	// }
}