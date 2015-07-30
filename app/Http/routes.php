<?php

Route::group(['prefix' => 'api', 'namespace' => 'Api'], function () {
    Route::resource('project', 'ProjectController');
    Route::resource('project.deployment', 'DeploymentController');
    Route::resource('project.server', 'ServerController');
    Route::resource('project.deployment-hook', 'DeploymentHookController');
    Route::resource('project.heartbeat', 'HeartbeatController');
    Route::resource('project.notification', 'NotificationController');
    Route::resource('project.collaborator', 'CollaboratorController');
});

Route::group(['namespace' => 'Front'], function () {

    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

    Route::resource('project', 'ProjectController', ['only' => ['show']]);

});


Route::get('/projects/{project}/health', ['as' => 'project.health', 'uses' => 'ProjectController@health']);
Route::get('/projects/{project}/settings', ['as' => 'project.settings', 'uses' => 'ProjectController@settings']);
Route::get('/projects/{project}/hooks/{hook}', ['as' => 'project.deployments', 'uses' => 'DeployController@hooks']);
Route::get('/projects/{project}/deployments/{deploy}', ['as' => 'project.deployments', 'uses' => 'DeployController@show']);
