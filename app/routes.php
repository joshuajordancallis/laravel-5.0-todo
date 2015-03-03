<?php
Route::bind('task', function($value, $route) {
	return Item::where('id', $value)->first();
});

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@getIndex'))->before('auth');
Route::post('/update', ['uses' => 'HomeController@postIndex'])->before('csrf');

Route::get('/login', ['as' => 'login', 'uses' => 'AuthController@getLogin'])->before('guest');
Route::post('/login', ['uses' => 'AuthController@postLogin'])->before('csrf');

Route::get('/new', ['as' => 'new', 'uses' => 'HomeController@getNew']);
Route::post('/new', ['uses' => 'HomeController@postNew'])->before('csrf');

Route::get('/project/{projectID}', ['as' => 'project', 'uses' => 'HomeController@getProject']);
Route::post('/project/{projectID}', ['uses' => 'HomeController@postProject']);

Route::get('/delete/{task}', ['as' => 'delete', 'uses' => 'HomeController@getDelete']);

Route::get('/logout', ['uses' => 'AuthController@Logout']);
