<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function read()
    {
        return view('employees', ['employees' => \App\Employees::all()]);
    }


    public function add(Request $request)
    {
        // $this->validate($request, [
        //     // [Dėmesio] validacijoje unique turi būti nurodytas teisingas lentelės pavadinimas!
        //     // galime pažiūrėti, kas bus jei bus neteisingas
        //        'name' => 'required',
        //        'surname' => 'required'
        //    ]);   
        $project = new \App\Employees();
        $project->name = $request['newName'];
        $project->save();
        return redirect(route('employees'));
        //  ($employee->save() !== 1) ? 
        //     redirect(route('home'))->with('status_succereturnss', 'New employee added!') : 
        //     redirect(route('home'))->with('status_error', 'Employee couldn\' be added!');
    }


    public function delete($id)
    {
        \App\Employees::destroy($id);
        return redirect(route('employees'));
    }

    public function update($id, Request $request)
    {
        // [Dėmesio] validacijoje unique turi būti nurodytas teisingas lentelės pavadinimas!
        // galime pažiūrėti, kas bus jei bus neteisingas
        $this->validate($request, [
            'name' => 'required|unique:blogposts,title|max:5'
        ]);
        $bp = \App\Employees::find($id);
        $bp->name = $request['title'];
        $bp->text = $request['text'];
        return ($bp->save() !== 1) ?
            redirect('/posts/' . $id)->with('status_success', 'Post updated!') :
            redirect('/posts/' . $id)->with('status_error', 'Post was not updated!');
    }
}
