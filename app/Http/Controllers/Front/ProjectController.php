<?php namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

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

        return view('front.projects.show', compact('project'));
    }

    public function settings($project)
    {
        $project = [
            'name' => ($project == 1 ? 'Deployer' : 'Tasks'),
            'repository' => ($project == 1 ? 'baconfy/deployer' : 'baconfy/tasks'),
            'provider' => 'github',
            'branch' => 'master',
        ];

        return view('front.projects.settings', compact('project'));
    }

    public function health($project)
    {
        $project = [
            'name' => ($project == 1 ? 'Deployer' : 'Tasks'),
        ];

        return view('front.projects.health', compact('project'));
    }
}
