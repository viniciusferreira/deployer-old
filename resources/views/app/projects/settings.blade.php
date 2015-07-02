@extends('app.layout')

@section('header-title', "{$project['name']} » Settings")

@section('header-actions')
    <a href="/projects/1" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</a>
@stop

@section('content')
    <div class="row row-space project-settings">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Options</h3>
                </div>

                <div class="fake-tabs list-group">
                    <a href="#project" class="list-group-item active"><i class="fa fa-paper-plane"></i> Project</a>
                    <a href="#delete-project" class="list-group-item"><i class="fa fa-trash"></i> Delete</a>
                </div>
            </div>
        </div>

        <div class="fake-tabs-content" id="project">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ $project['name'] }}</h3>
                    </div>

                    <div class="panel-body">
                        @include('app.projects.form', ['project' => ['id' => 1]])
                    </div>
                </div>
            </div>
        </div>

        <div class="fake-tabs-content" id="delete-project">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Remove this project!</h3>
                    </div>

                    <div class="panel-body">
                        <form>
                            <button type="submit" class="btn btn-block btn-danger btn-lg">
                                <i class="fa fa-trash-o"></i> Click this button only if you're sure!
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop