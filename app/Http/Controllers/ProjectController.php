<?php namespace App\Http\Controllers;

class ProjectController extends Controller
{

    public function show($id)
    {
        $project = [
            'name' => ($id == 1 ? 'Deployer' : 'Tasks'),
            'repository' => ($id == 1 ? 'baconfy/deployer' : 'baconfy/tasks'),
            'provider' => 'github',
            'branch' => 'master',
        ];

        return view('app.projects.show', compact('project'));
    }

}
