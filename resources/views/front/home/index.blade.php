@extends('front.layout')

@section('header-title', 'Dashboard')

@section('header-actions')
    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#add-project"><i class="fa fa-plus"></i> Add Project</a>
@stop

@section('content')
    <div class="panel panel-default">
        <div class="table-responsive">
            <table class="table table-lg">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Repository</th>
                        <th>Last Deploy</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="/projects/1">Deployer</a></td>
                        <td><a target="_blank" href="http://github.com/baconfy/deployer"><i class="fa fa-github"></i> baconfy/deployer</a></td>
                        <td>20/06/2015</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><a target="_blank" href="/projects/2">Tasks</a></td>
                        <td><a href="http://github.com/baconfy/tasks"><i class="fa fa-github"></i> baconfy/tasks</a></td>
                        <td>20/06/2015</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    @include('front.modals.add-project', ['project' => []])
@stop