@extends('app.layout')

@section('header-title', "{$deployment['project']} » Deployement View")

@section('header-actions')
    <a href="/projects/1" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</a>
@stop

@section('content')
    @include('app.deploy.hook', ['hook' => [
        'title' => 'Clone New Release',
        'server' => 'Server Name',
        'status' => 'Finished',
        'started-at' => '14:37:21',
        'finished-at' => '14:38:21',
        'duration' => '1 Minut',
    ]])


    @include('app.deploy.hook', ['hook' => [
        'title' => 'Install Composer Dependencies',
        'server' => 'Server Name',
        'status' => 'Finished',
        'started-at' => '14:37:21',
        'finished-at' => '14:38:21',
        'duration' => '1 Minut',
    ]])

    @include('app.deploy.hook', ['hook' => [
        'title' => 'Activate New Release',
        'server' => 'Server Name',
        'status' => 'Finished',
        'started-at' => '14:37:21',
        'finished-at' => '14:38:21',
        'duration' => '1 Minut',
    ]])

    @include('app.deploy.hook', ['hook' => [
        'title' => 'Purge Old Release',
        'server' => 'Server Name',
        'status' => 'Finished',
        'started-at' => '14:37:21',
        'finished-at' => '14:38:21',
        'duration' => '1 Minut',
    ]])
@stop