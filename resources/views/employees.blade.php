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
        <a href="{{route('findEmployee', $value['id'])}}">Update</a>
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

</div>
@if (isset($_GET['findEmployee']))
<div class="col-md-3">
    <form action="{{route('employee.update',$_GET['findEmployee']['id'])}}" method="post" autocomplete="off">
        @method('PUT') @csrf
        <div class="form-group">
            <label for="InputFname">First Name</label>
        <input class="form-control" id="InputFname" type="text" name="ufname" value="{{$_GET['findEmployee']['name']}}">
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Submit">
            <a style="float: right" class="btn btn-secondary" href="{{route('employees')}}">Back</a>
        </div>
    </form>
</div>
@endif
@endsection
