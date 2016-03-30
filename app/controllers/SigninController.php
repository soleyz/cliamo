<?php

class SigninController extends BaseController{
	public function showSignin()
	{
		return View::make('signin');
	}
	public function showLogin()
	{
		return View::make('login');
	}
	public function doSignout()
	{
		Auth::logout();
		return Redirect::to('signin');
	}
	public function doLogout()
	{
		Auth::logout();
		return Redirect::to('login');
	}
	public function showInfo()
	{
		return View::make('officerinfo');
	}
	public function showUserInfo()
	{
		return View::make('userinfo');
	}
	public function showUserLocation(){
		return View::make('showuserlocation');
	}
	public function doSignin()
	{
		
		// validate the info, create rules for the inputs
		// $rules = array(
		// 	'username'    => 'required', // make sure the user is an actual user
		// 	'password' => 'required' // password can only be alphanumeric and has to be greater than 3 characters
		// 	);
		// $msg = array(
		// 	'username.required' => 'username ไม่สามารถเป็นค่าว่างได้',
		// 	'password.required' => 'password ไม่สามารถเป็นค่าว่างได้',
		// 	'username.min' => 'username ต้องไม่ต่ำกว่า :min ตัวอักษร',
		// 	'password.min' => 'password ต้องไม่ต่ำกว่า :min ตัวอักษร',
		// 	);
		// // run the validation rules on the inputs from the form
		// $validator = Validator::make(Input::all(), $rules,$msg);

		// // if the validator fails, redirect back to the form
		// if ($validator->fails()) {
		// 	$messages = $validator->messages();
		// 		//return Redirect::to('signup')->withErrors($messages)->withInput();
		// 	return Redirect::to('signin')
		// 		->withErrors($validator) // send back all errors to the login form
		// 		->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		// 	} 
		// 	else {

			// create our user data for the authentication
				$userdata = array(
					'username' 	=> Input::get('username'),
					'password' 	=> Input::get('password')
					);

			// attempt to do the login
				if (Auth::attempt($userdata)) {

				// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
					return Redirect::to('officerinfo');

				} 
				else {	 	
					//return 'fail';
					// return $userdata;
					return Redirect::to('signin');//->with('message','fail');
				}

			// }
			
		}
	public function doLogin(){
		
		
					//if (Auth::attempt('platenumpart1' => Input::get('platenumpart1')))
		 $auth = User::where('platenumpart1', '=', Input::get('platenumpart1'))->where('platenumpart2', '=', Input::get('platenumpart2'))->where('platenumpart3', '=', Input::get('platenumpart3'))->first();
        if($auth){
            Auth::login($auth);
            return Redirect::to('userinfo');
        }
        else
        {
            return Redirect::to('login');
        }
				
	}
}

