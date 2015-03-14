<?php
Route::bind('projectID', function($value, $route) {
	return Project::where('id', $value)->first();
});

/** Just redirect to login page */
Route::get('/', array('as' => 'Home', 'uses' => 'HomeController@getIndex'))->before('auth');
/** Display login page if not logged in otherwise display the users projects */
Route::get('/dashboard', ['as' => 'Dashboard', 'uses' => 'DashboardController@getIndex'])->before('auth');
/** The login page */
Route::get('/login', ['as' => 'login', 'uses' => 'AuthController@getLogin'])->before('guest');
/** Add new project display */
Route::get('/new', ['as' => 'new', 'uses' => 'ProjectController@getNew']);
/** View a project */
Route::get('/project/{projectID}', ['as' => 'project', 'uses' => 'ProjectController@getProject']);

/** Process the login */
Route::post('/login', ['uses' => 'AuthController@postLogin'])->before('csrf');
/** logout do i need to explain */
Route::get('/logout', ['uses' => 'AuthController@Logout']);

//Route::post('/project/{projectID}', ['uses' => 'ProjectController@postProject']);

/** Update a project */
Route::post('/project/update', ['uses' => 'ProjectController@postUpdate'])->before('csrf');


Route::get('/project/delete/{projectID}', ['as' => 'delete', 'uses' => 'ProjectController@getDelete']);

/** Process the new project */
Route::post('/new', ['uses' => 'ProjectController@postNew'])->before('csrf');
