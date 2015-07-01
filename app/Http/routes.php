<?php

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('/projects/{id}', ['as' => 'project', 'uses' => 'ProjectController@show']);