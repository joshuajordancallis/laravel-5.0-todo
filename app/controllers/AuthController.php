<?php

class AuthController extends Controller {
	public function getLogin() {
		return View::make('login');
	}

	public function postLogin() {
		$rules = ['username' => 'required', 'password' => 'required'];
		$validator = Validator::make(Input::all(), $rules);

	if ($validator->fails()) {
		return Redirect::to('login')->withErrors($validator);
	}

	$auth = Auth::attempt([

	  'name' => Input::get('username'),
	  //hash - SHA encryption
	  'password'=> Input::get('password')

     ], false);

	if(!$auth) {
		return Redirect::to('login')->withErrors([

		  'Invalid credentials were provided'

		])->withInput();
	}

	return Redirect::to('dashboard');
	}

	public function Logout() {
		$Logout = Auth::Logout();
		if (!$Logout) {
			return Redirect::to('dashboard')->withErrors(['we are unable to log you out']);
		}
		return Redirect::to('/');

	}
}
