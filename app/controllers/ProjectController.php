<?php

class ProjectController extends \BaseController {

	public function getIndex()
	{
		$projects = Auth::user()->projects;

		return View::make('projects', [
		   'projects' => $projects
		]);
	}
	public function postIndex() {
		$id = Input::get('id');
		$userId = Auth::user()->id;

		$projects = Item::findOrFail($id);

		if($projects->owner_id == $userId) {
			$projects->mark();
		}

		return Redirect::route('home');
	}

	public function getNew() {
		return View::make('new');

	}

	public function postNew(){
		$rules = ['name' => 'required|min:3|max:255'];
		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {
			return Redirect::route('new')->withErrors($validator);
		}

		$project = new Project;
		$project->name = Input::get('name');
		$project->owner_id = Auth::user()->id;
		$project->save();

		return Redirect::route('home');
	}

	public function getProject($projectID) {

		$project = new Project();
		$project->getSubTasks($projectID);

		return View::make('project');
	}
	public function postProject($projectID) {

		return View::make('project');
	}

	public function getDelete(Project $project) {
		$userId = Auth::user()->id;

		if($project->owner_id == $userId) {
			$project->delete();
		}

		return Redirect::route('home');
	}


}
