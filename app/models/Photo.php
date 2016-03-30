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

}
