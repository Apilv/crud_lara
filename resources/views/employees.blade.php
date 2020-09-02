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
        <td><a href="{{route('delete_employee', $value['id'])}}">Delete</a>
        <a href="index.php?updateEmployee={{$value['id']}}&updatEmployeeName={{$value['name']}}">Update</a>
            <a href="?addEmployee">Add</a>
        </td>
    </tr>
    @endforeach
</table>

@if (isset($_GET['addEmployee']))
<form action="" method="post">
    @csrf
        <div>Name of New employee:</div>
        <input type="text" name="newName" required><br>
        <input type="submit" value="Submit">
    </form>
@endif


@if (isset($_GET['updateEmployee']))
    <form action="" method="post">
    @csrf
        <div>Employee Id</div>
    <input type="number" name="employeeId" value="" readonly><br>
        <div>Name of employee:</div>
    <input type="text" name="updateName" value="{{}}" required><br>
        <input type="submit" value="Submit">
    </form>
    @endif
@endsection
