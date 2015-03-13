<?php
Route::bind('project', function($value, $route) {
	return Projects::where('id', $value)->first();
});

Route::get('/', array('as' => 'Home', 'uses' => 'HomeController@getIndex'))->before('auth');

Route::get('/dashboard', ['as' => 'Dashboard', 'uses' => 'DashboardController@getIndex'])->before('auth');

Route::get('/login', ['as' => 'login', 'uses' => 'AuthController@getLogin'])->before('guest');
Route::post('/login', ['uses' => 'AuthController@postLogin'])->before('csrf');

Route::get('/new', ['as' => 'new', 'uses' => 'ProjectController@getNew']);
Route::post('/new', ['uses' => 'ProjectController@postNew'])->before('csrf');

Route::post('/update', ['uses' => 'ProjectController@postUpdate'])->before('csrf');

Route::get('/project/{projectID}', ['as' => 'project', 'uses' => 'ProjectController@getProject']);
Route::post('/project/{projectID}', ['uses' => 'ProjectController@postProject']);

Route::get('/delete/{project}', ['as' => 'delete', 'uses' => 'ProjectController@getDelete']);

Route::get('/logout', ['uses' => 'AuthController@Logout']);
