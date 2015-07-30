@extends('front.layout')

@section('header-title', $project['name'])

@section('header-actions')
    <a href="/projects/1/settings" class="btn btn-default"><i class="fa fa-cog"></i> Settings</a>
    <a href="" class="btn btn-primary"><i class="fa fa-cloud-upload"></i> Deploy</a>
@stop

@section('content')
    <div class="row row-space">
        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Project Details</h3>
                </div>
                <table class="table table-lg">
                    <tr>
                        <td>Repository</td>
                        <td class="text-right"><a target="_blank" href="http://github.com/{{ $project['repository'] }}"><i class="fa fa-{{ $project['provider'] }}"></i> {{ $project['repository'] }}</a></td>
                    </tr>
                    <tr>
                        <td>Deploy Branch</td>
                        <td class="text-right"><a href="https://github.com/{{ $project['repository'] }}/tree/{{ $project['branch'] }}">{{ $project['branch'] }}</a></td>
                    </tr>
                    <tr>
                        <td>Health Check URL</td>
                        <td class="text-right"><a href="#" target="_blank">Open URL</a></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Deployents</h3>
                </div>
                <table class="table table-lg">
                    <tr>
                        <td>Today's</td>
                        <td class="text-right">0</td>
                    </tr>
                    <tr>
                        <td>This Week</td>
                        <td class="text-right">0</td>
                    </tr>
                    <tr>
                        <td>Last Duration</td>
                        <td class="text-right">N/A</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Post-Deploy Health</h3>
                </div>
                <div class="panel-body text-center" data-ajax-content="true" data-href="/projects/1/health" data-interval="5"></div>
            </div>
        </div>
    </div>

    <div class="row row-space">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tabDeployments" data-toggle="tab"><i class="fa fa-clock-o"></i> Deployments</a></li>
                        <li><a href="#tabServers" data-toggle="tab"><i class="fa fa-server"></i> Servers</a></li>
                        <li><a href="#tabDeploymentHooks" data-toggle="tab"><i class="fa fa-cloud-upload"></i> Deployment Hooks</a></li>
                        <li><a href="#tabHeartbeat" data-toggle="tab"><i class="fa fa-heartbeat"></i> Heartbeat</a></li>
                        <li><a href="#tabNotifications" data-toggle="tab"><i class="fa fa-exclamation-triangle"></i> Notifications</a></li>
                        <li><a href="#tabCollaborators" data-toggle="tab"><i class="fa fa-users"></i> Collaborators</a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tabDeployments">
                            @include('app.projects.tabs.deployments')
                        </div>
                        <div class="tab-pane fade" id="tabServers">
                            @include('app.projects.tabs.servers')
                        </div>
                        <div class="tab-pane fade" id="tabDeploymentHooks">
                            @include('app.projects.tabs.deployment-hooks')
                        </div>
                        <div class="tab-pane fade" id="tabHeartbeat">
                            @include('app.projects.tabs.heartbeat')
                        </div>
                        <div class="tab-pane fade" id="tabNotifications">
                            @include('app.projects.tabs.notifications')
                        </div>
                        <div class="tab-pane fade" id="tabCollaborators">
                            @include('app.projects.tabs.collaborators')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop