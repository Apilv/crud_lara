<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$dir = '/crud_lara';

Route::get($dir.'/', 'EmployeesController@read')->name('employees');
Route::post($dir . '/', 'EmployeesController@add');
Route::get($dir . '/del/{id}/', 'EmployeesController@delete')->name('delete_employee');

Route::get($dir . '/update/{id}/', function ($id) {
    $employee = \App\Employees::find($id);
    return redirect()->route('employees', ['findEmployee' => ['id' => $employee->id, 'name' => $employee->name]]);
})->name('findEmployee');
Route::put($dir . 'editEmployee/{id}/', 'EmployeesController@update')->name('employee.update');

Route::get($dir . '/projects', 'ProjectsController@read')->name('projects');
Route::post($dir . '/projects', 'ProjectsController@add');
Route::get($dir . '/projects/del/{id}/', 'ProjectsController@delete')->name('delete_project');

Route::get($dir . '/edit/{id}/', function ($id) {
    $project = \App\Projects::find($id);
    return redirect()->route('projects', ['findProject' => ['id' => $project->id, 'name' => $project->project_name, 'deadline' => $project->deadline]]);
})->name('findProject');
Route::put($dir . 'editProject/{id}/', 'ProjectsController@update')->name('project.update');