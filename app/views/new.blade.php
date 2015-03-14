@extends('layouts.dashboard')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			 @foreach($errors->all() as $error)
			 <div class="alert alert-danger alert-dismissable" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				{{ $error }}
			 </div>
			@endforeach
		</div>
	</div>

	{{Form::open(['url'=> 'new', 'method'=>'post'])}}
    <div class="row">
        <div class="col-md-6 subtasklist">
	        <div class="form-group">
	        	<label for="project-name" class="control-label">Project Name:</label>
	        	<input type="text" name="project-name" id="project-name" class="form-control" placeholder="Project Name">
	        </div>

	       <div class="form-group">
	        	<label class="control-label">Project Sub Tasks:</label>
	        	<div class="input-group">
		        	<input type="text" name="subtask[]" class="form-control project-task" placeholder="Project Sub Task 1">
		        	<span class="input-group-btn">
		        		<a href="#" tabindex="-1" class="btn btn-link add-description" data-targetid="1" data-toggle="tooltip" data-placement="right" title="Add description for task"><span class="fa fa-plus"></span></a>
		        	</span>
		        	<input type="text" name="subtaskdescription[]" data-fid="1" class="subtaskdescription">
		        </div>
	        </div>
	        <div class="form-group">
	        	<div class="input-group">
		        	<input type="text" name="subtask[]" class="form-control project-task" placeholder="Project Sub Task 2">
		        	<span class="input-group-btn">
		        		<a href="#" tabindex="-1" class="btn btn-link add-description" data-targetid="2" data-toggle="tooltip" data-placement="right" title="Add description for task"><span class="fa fa-plus"></span></a>
		        	</span>
		        	<input type="text" name="subtaskdescription[]" data-fid="2" class="subtaskdescription">
		        </div>
	        </div>
	        <div class="form-group">
		        <div class="input-group">
		        	<input type="text" name="subtask[]" class="form-control project-task" placeholder="Project Sub Task 3">
		        	<span class="input-group-btn">
		        		<a href="#" tabindex="-1" class="btn btn-link add-description" data-targetid="3" data-toggle="tooltip" data-placement="right" title="Add description for task"><span class="fa fa-plus"></span></a>
		        	</span>
		        	<input type="text" name="subtaskdescription[]" data-fid="3" class="subtaskdescription">
		        </div>
	        </div>
        	<div class="help-block">
        		<a href="javascript:void(0);" id="new-field">Add New</a>
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
<div class="row">
	<div id="descriptionModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="descriptionModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		    <div class="modal-content">
		        <div class="modal-header">
		            <a class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
		            <h4 class="modal-title" id="descriptionModalLabel">Modal Heading</h4>
		        </div>
		        <div class="modal-body">
		            <h4>Text in a modal</h4>
			        <div class="form-group">
			        	<textarea cols="30" rows="10" name="example" class="form-control" id="description" placeholder="Add a description"></textarea>
			        </div>
		        </div>
		        <div class="modal-footer">
		            <div class="btn-group">
			            <button class="btn btn-danger" data-dismiss="modal" id="cancel-description">Cancel</button>
			            <button class="btn btn-primary" id="save-description">Save changes</button>
		            </div>
		        </div>
	        </div><!-- /.modal-content -->
	    </div><!-- /.modal-dialog -->
	</div>
</div><!-- /.modal -->
@stop
