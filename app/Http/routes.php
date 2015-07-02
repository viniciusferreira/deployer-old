<?php

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('/projects/{project}', ['as' => 'project', 'uses' => 'ProjectController@show']);
Route::get('/projects/{project}/settings', ['as' => 'project.settings', 'uses' => 'ProjectController@settings']);
Route::get('/projects/{project}/deployments/{deploy}', ['as' => 'project.deployments', 'uses' => 'DeployController@show']);