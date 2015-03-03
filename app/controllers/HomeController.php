<?php

class HomeController extends BaseController {

	public function getIndex()
	{
		$projects = Auth::user()->items;

		return View::make('projects', [
		   'projects' => $projects
		]);
	}

	public function postIndex() {
		$id = Input::get('id');
		$userId = Auth::user()->id;

		$item = Item::findOrFail($id);

		if($item->owner_id == $userId) {
			$item->mark();
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

		$item = new Item;
		$item->name = Input::get('name');
		$item->owner_id = Auth::user()->id;
		$item->save();

		return Redirect::route('home');

	}

	public function getProject($projectID) {

		return View::make('project');
	}
	public function postProject($projectID) {

		return View::make('project');
	}

	public function getDelete(Item $task) {
		$userId = Auth::user()->id;

		if($task->owner_id == $userId) {
			$task->delete();
		}

		return Redirect::route('home');
	}

}
