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


Route::get('/', 'EmployeesController@read')->name('employees');
Route::post('/', 'EmployeesController@add');
Route::get('/del/{id}/', 'EmployeesController@delete')->name('delete_employee');


Route::get('/projects', 'ProjectsController@read')->name('projects');
Route::post('/projects', 'ProjectsController@add');
Route::get('/projects/del/{id}/', 'ProjectsController@delete')->name('delete_project');