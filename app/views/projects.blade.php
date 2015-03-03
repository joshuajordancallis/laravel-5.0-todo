@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-7">
                    <h5 class="page-header">Projects</h5>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-5">
                    <a href="{{URL::to('new')}}" class="pull-right">Add Project</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="list-group">
                    @foreach($projects as $project)
                        <a href="{{URL::to('project',[$project->id])}}" class="list-group-item"><span>{{$project->name}}</span></a>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
