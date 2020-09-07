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
        // $this->validate($request, [
        //     // [Dėmesio] validacijoje unique turi būti nurodytas teisingas lentelės pavadinimas!
        //     // galime pažiūrėti, kas bus jei bus neteisingas
        //        'name' => 'required',
        //        'surname' => 'required'
        //    ]);   
        $project = new \App\Projects();
        $project->project_name = $request['newProjectName'];
        $project->deadline = $request['newProjectDeadline'];
        $project->save();
        return redirect(route('projects'));
        //  ($employee->save() !== 1) ? 
        //     redirect(route('home'))->with('status_succereturnss', 'New employee added!') : 
        //     redirect(route('home'))->with('status_error', 'Employee couldn\' be added!');
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
