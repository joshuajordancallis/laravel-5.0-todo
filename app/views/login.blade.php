@extends('layouts.main')

@section('content')



	{{ Form::open(['autocomplete' => 'off']) }}

	<input type="text" name="username" placeholder="username">
	<input type="password" name="password" placeholder="password">
	<input type="submit" valie="sign in">

	{{ Form::close() }}
@stop
