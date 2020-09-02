@extends('layouts.master')

@section('content')

 <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>
    @foreach ($employees as $value)
        <tr>
        <td>{{$value['id']}}</td>
        <td>{{$value['name']}}</td>
        <td><a href="">Delete</a>
            <a href="?addEmployee">Add</a>
            <a href="">Update</a>
        </td>
        </tr>
        @endforeach
    </table>

@if (isset($_GET['addEmployee']))
    <form action="" method="post">
        <div>Name of New employee:</div>
        <input type="text" name="newName" required><br>
        <input type="submit" name="addNewEmployee" value="Submit">
    </form>
@endif

@endsection
