<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function read()
    {
        return view('employees', ['key' => \App\Employees::all()]);
    }

}
