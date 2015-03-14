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

		$projects = Project::findOrFail($id);

		if($projects->owner_id == $userId) {
			$projects->markComplete();
		}

		return Redirect::to('home');
	}

	public function getNew() {
		return View::make('new');

	}

	public function postNew() {
		$rules = ['name' => 'required|min:3|max:255'];
		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {
			return Redirect::to('new')->withErrors($validator);
		}

		$project = new Project;
		$project->name = Input::get('name');
		$project->owner_id = Auth::user()->id;
		$project->save();

		return Redirect::to('home');
	}

	public function getProject(Project $project) {
		$userId = Auth::user()->id;

		if($userId !== $project->owner_id) {
			Redirect::to('dashboard');//->withErrors('You cannot view this project');
		}

		$project_model = new Project();
		//$projectData = $project->getProject($projectID);
		$projectSubTasks = $project_model->getProjectSubTasks($project->id);

		return View::make('project', ['project'=>$project,'projectSubTasks'=>$projectSubTasks]);
	}
	// public function postProject($projectID) {

	// 	return View::make('project');
	// }

	public function getEdit() {
		return View::make('edit');
	}

	public function getDelete(Project $project) {
		$userId = Auth::user()->id;

		if($project->owner_id == $userId) {
			$project->delete();
		}

		return Redirect::to('dashboard');
	}


}
