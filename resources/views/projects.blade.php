@extends('layouts.master')

@section('content')

    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Deadline</th>
        </tr>
    @foreach ($projects as $value)
        <tr>
        <td>{{$value['id']}}</td>
        <td>{{$value['project_name']}}</td>
        <td>{{$value['deadline']}}</td>
        <td><a href="">Delete</a>
            <a href="?addProject">Add</a>
            <a href="">Update</a>
        </td>
        </tr>
        @endforeach
    </table>

    @if (isset($_GET['addProject']))
    <form action="" method="post">
        <div>Project name:</div>
        <input type="text" name="newProjectName" required>
        <div>Project deadline:</div>
        <input type="date" name="newProjectDeadline" required><br>
        <input type="submit" name="addNewProject" value="Submit">
    </form>
@endif


@endsection

