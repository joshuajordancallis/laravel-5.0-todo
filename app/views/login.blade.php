@extends('layouts.main')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			 @foreach($errors->all() as $error)
			 <div class="alert alert-danger">
				{{ $error }}
			 </div>
			@endforeach
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3 highlighted-box">
			<h2 class="page-header text-center">Login</h2>
			{{ Form::open(['autocomplete' => 'off', 'class' => 'form-horizontal']) }}
				<div class="form-group">
					<label for="username" class="control-label col-sm-3">User name: </label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="username" id="username" placeholder="User name" value="{{Input::old('username')}}">
					</div>
				</div>
				<div class="form-group">
					<label for="username" class="control-label col-sm-3">Password: </label>
					<div class="col-sm-9">
						<input type="password" class="form-control" name="password" id="password" placeholder="Password">
					</div>
				</div>
				<div class="form-group">
						<div class="col-md-6 col-md-offset-6">
							<input type="submit" class="btn btn-success pull-right" value="sign in">
						</div>
				</div>

			{{ Form::close() }}
		</div>
	</div>
</div>
@stop
