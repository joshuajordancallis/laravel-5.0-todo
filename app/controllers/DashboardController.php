<?php

class DashboardController extends \BaseController {

	public function getIndex() {
		$projects = Auth::user()->projects;

		return View::make('projects', [
		   'projects' => $projects
		]);
	}


}
