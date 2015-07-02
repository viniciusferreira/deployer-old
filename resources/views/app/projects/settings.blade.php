@extends('app.layout')

@section('header-title', "{$project['name']} » Settings")

@section('header-actions')
    <a href="" class="btn btn-default" data-toggle="modal" data-target="#project-settings"><i class="fa fa-cog"></i> Settings</a>
    <a href="" class="btn btn-primary"><i class="fa fa-cloud-upload"></i> Deploy</a>
@stop

@section('content')
    <div class="row row-space">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Options</h3>
                </div>

                <div class="list-group">
                    <a href="#" class="list-group-item active"><i class="fa fa-paper-plane"></i> Project</a>
                    <a href="#" class="list-group-item"><i class="fa fa-trash"></i> Delete</a>
                </div>
            </div>
        </div>

        <div class="hide" id="project">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ $project['name'] }}</h3>
                    </div>

                    <div class="panel-body">
                        @include('app.projects.form')
                    </div>
                </div>
            </div>
        </div>

        <div class="hide" id="delete-project">
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