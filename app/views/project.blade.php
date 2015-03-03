@extends('layouts.main')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h3 class="page-header">Project Title</h3>
		</div>
		<div class="col-md-2">
			<a href="#" class="pull-right">Edit Project</a>
		</div>
	</div>
    <div class="row">

        <div class="col-md-6">

            <div class="todolist not-done">
             		<h2 class="page-header">Tasks to complete</h2>
                    <ul id="sortable" class="list-unstyled">
                    <li class="ui-state-default">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="" />Take out the trash</label>
                        </div>
                    </li>
                    <li class="ui-state-default">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="" />Buy bread</label>
                        </div>
                    </li>
                    <li class="ui-state-default">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="" />Teach penguins to fly</label>
                        </div>
                    </li>
                </ul>
                <div class="todo-footer">
                    <strong><span class="count-todos"></span></strong> Items Left
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="todolist">
             <h2 class="page-header">Tasks Completed</h2>
                <ul id="done-items" class="list-unstyled">
                    <li><span>Some item </span><button class="btn btn-warning btn-xs pull-right remove-item"><i class="fa fa-reply-all"></i></button></li>

                </ul>
            </div>
        </div>
    </div>
</div>

@stop






