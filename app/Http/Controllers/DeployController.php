<?php namespace App\Http\Controllers;

class DeployController extends Controller
{

    public function show($project, $id)
    {
        $deployment = [
            'project' => ($project == 1 ? 'Deployer' : 'Tasks'),
        ];

        return view('app.deploy.show', compact('deployment'));
    }

}
