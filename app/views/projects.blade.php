@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 highlighted-box">
            <div class="row">
                <div class="col-xs-9">
                    <h3 class="page-header text-center">Projects</h3>
                </div>
                <div class="col-xs-3">
                    <a href="{{URL::to('new')}}" class="top-margin-20 pull-right">Add Project</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="list-group">
                    @foreach($projects as $project)
                        <a href="{{URL::to('project',[$project->id])}}" class="list-group-item">
                            <div class="row">
                                <div class="col-md-6">
                                    {{$project->name}}
                                </div>
                                <div class="col-md-6">
                                    {{$project->date}}
                                </div>
                            </div>
                        </a>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
