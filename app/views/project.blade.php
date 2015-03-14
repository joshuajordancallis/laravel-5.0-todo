@extends('layouts.dashboard')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h3 class="page-header">{{$project->name}}</h3>
		</div>
		<div class="col-md-2">
			<a href="{{URL::to('project/edit',[$project->id])}}" class="pull-right">Edit Project</a>
		</div>
	</div>
    <div class="row">

        <div class="col-md-6">

            <div class="todolist not-done">
         		<h2 class="page-header">Tasks to complete</h2>
                <ul id="sortable" class="list-unstyled">
                @foreach($projectSubTasks as $projectSubTask)
                    @if($projectSubTask->complete === 0)
                    <li class="ui-state-default">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="" /> {{$projectSubTask->name}}
                            </label>
                        </div>
                    </li>
                    @endif
                @endforeach
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
                @foreach($projectSubTasks as $projectSubTask)
                    @if($projectSubTask->complete === 1)
                    <li>
                        <span>{{$projectSubTask->name}} </span>
                        <button class="btn btn-warning btn-xs pull-right remove-item"><i class="fa fa-reply-all"></i></button>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@stop






