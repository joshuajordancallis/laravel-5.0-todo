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
	{{Form::open(['url'=> 'new', 'method'=>'post'])}}
    <div class="row">
        <div class="col-md-6">
	        <div class="form-group">
	        	<label for="project-name" class="control-label">Project Name:</label>
	        	<input type="text" name="project-name" id="project-name" class="form-control" placeholder="Project Name">
	        </div>


	       <div class="form-group">
	        	<label class="control-label">Project Sub Tasks:</label>
	        	<div class="input-group">
		        	<input type="text" name="subtask[]" class="form-control project-task" placeholder="Project Sub Task 3">
		        	<span class="input-group-btn">
		        		<a href="#" tabindex="-1" class="btn btn-link delete-option" title="Add description"><span class="fa fa-plus"></span></a>

		        	</span>
		        </div>
	        </div>
	        <div class="form-group">
	        	<div class="input-group">
		        	<input type="text" name="subtask[]" class="form-control project-task" placeholder="Project Sub Task 3">
		        	<span class="input-group-btn"><a href="#" tabindex="-1" class="btn btn-link delete-option" title="Add description"><span class="fa fa-plus"></span></a></span>
		        </div>
	        </div>
	        <div class="form-group">
		        <div class="input-group">
		        	<input type="text" name="subtask[]" class="form-control project-task" placeholder="Project Sub Task 3">
		        	<span class="input-group-btn"><a href="#" tabindex="-1" class="btn btn-link delete-option" title="Add description"><span class="fa fa-plus"></span></a></span>
		        </div>
	        </div>
	    </div>
	    <div class="col-md-6">
	        <div class="form-group">
	        	<label for="project-finaldate" class="control-label">Date to be complete:</label>
	        	<input type="text" name="project-finaldate" id="project-finaldate" class="form-control bsdp" value="{{date('d/m/Y')}}">
	        </div>
	    </div>
    </div>
    <div class="row">
    	<div class="col-md-12">
    		<input type="submit" class="btn btn-primary pull-right" value="Submit">
    	</div>
    </div>
    {{ Form::close() }}
</div>
@stop
