@extends('layouts.main')

@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		 @foreach($errors->all() as $error)
		 <div class="alert alert-danger">
			{{ $error }}
		 </div>
		@endforeach
	</div>
</div>

<div class="container">
    <div class="row">
    {{Form::open(['url'=> 'new'])}}
        <div class="col-md-6">
	        <div class="form-group">
	        	<label for="project-name" class="control-label">Project Name:</label>
	        	<input type="text" name="project-name" id="project-name" class="form-control" placeholder="Project Name">
	        </div>
	       <div class="form-group">
	        	<label class="control-label">Project Sub Tasks:</label>
	        	<input type="text" name="subtask[]" class="form-control project-task" placeholder="Project Sub Task 1">
	        </div>
	        <div class="form-group">
	        	<input type="text" name="subtask[]" class="form-control project-task" placeholder="Project Sub Task 2">
	        </div>
	        <div class="form-group">
	        	<input type="text" name="subtask[]" class="form-control project-task" placeholder="Project Sub Task 3">
	        </div>
	    </div>
	    <div class="col-md-6">
	        <div class="form-group">
	        	<label for="project-finaldate" class="control-label">Date to be complete:</label>
	        	<input type="text" name="project-finaldate" id="project-finaldate" class="form-control bsdp" value="{{date('d/m/Y')}}">
	        </div>
	        <input type="submit" class="btn btn-primary pull-right" value="Submit">
	    </div>
    {{ Form::close() }}
    </div>
</div>
@stop
