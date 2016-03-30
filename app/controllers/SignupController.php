<?php

class SignupController extends BaseController
{
	public function show()
	{
		//return View::make('first');
		return View::make('signup');
	}
	public function showregister()
	{
		//return View::make('first');
		return View::make('registration');
	}
	public function test(){
		return View::make('test');
	}
	public function signup()
	{		
		$user = new User();
		$user->signup(Input::get('username'),Input::get('password'),Input::get('firstname'),Input::get('lastname'),Input::get('email'),
			Input::get('address'),Input::get('phonenumber'),Input::get('gender'),Input::get('available'),Input::get('longtitude'),Input::get('latitude'),Input::get('platenumpart1'),Input::get('platenumpart2'),Input::get('platenumpart3'),Input::get('checktype'));
		return Redirect::to('signin');
	}
	public function register()
	{		
		$user = new User();
		$user->register(Input::get('username'),Input::get('password'),Input::get('firstname'),Input::get('lastname'),Input::get('email'),
			Input::get('address'),Input::get('phonenumber'),Input::get('gender'),Input::get('available'),Input::get('longtitude'),Input::get('latitude'),Input::get('platenumpart1'),Input::get('platenumpart2'),Input::get('platenumpart3'),Input::get('checktype'));
		return Redirect::to('login');
	}
	
	
}