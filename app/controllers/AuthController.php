<?php

class AuthController extends Controller {
	public function getLogin() {
		return View::make('login');
	}

	public function postLogin() {
		$rules = ['username' => 'required', 'password' => 'required'];
		$validator = Validator::make(Input::all(), $rules);

	if ($validator->fails()) {
		return Redirect::route('login')->withErrors($validator);
	}

	$auth = Auth::attempt([

	  'name' => Input::get('username'),
	  //hash - SHA encryption
	  'password'=> Input::get('password')

     ], false);

	if(!$auth) {
		return Redirect::route('login')->withErrors([

		  'Invalid credentials were provided'

		]);
	}

	return Redirect::route('home');
	}

	public function Logout() {
		$Logout = Auth::Logout();
		if (!$Logout) {
			return Redirect::to('/')->withErrors(['we are unable to log you out']);
		}
		return Redirect::to('/');

	}
}
