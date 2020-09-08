<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function read()
    {
        return view('projects', ['projects' => \App\Projects::all()]);
    }

    public function add(Request $request)
    {
        $project = new \App\Projects();
        $project->project_name = $request['newProjectName'];
        $project->deadline = $request['newProjectDeadline'];
        $project->save();
        return redirect(route('projects'));
    }

    public function delete($id)
    {
        \App\Projects::destroy($id);
        return redirect(route('projects'));
    }

    public function update($id, Request $request)
    {
        $projects = \App\Projects::find($id);
        $projects->project_name = $request['ufname'];
        $projects->deadline = $request['ufdate'];
        $projects->save();
        return redirect(route('projects'));
    }

}
