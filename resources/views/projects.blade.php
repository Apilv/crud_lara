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
        <td><a href="{{route('delete_project', $value['id'])}}">Delete</a>
            <a href="?addProject">Add</a>
            <a href="{{route('findProject', $value['id'])}}">Update</a>
        </td>
        </tr>
        @endforeach
    </table>

    @if (isset($_GET['addProject']))
    <form action="" method="post">
        @csrf
        <div>Project name:</div>
        <input type="text" name="newProjectName" required>
        <div>Project deadline:</div>
        <input type="date" name="newProjectDeadline" required><br>
        <input type="submit" value="Submit">
    </form>
@endif

    </div>
@if (isset($_GET['findProject']))
<div class="col-md-3">
    <form action="{{route('project.update',$_GET['findProject']['id'])}}" method="post" autocomplete="off">
        @method('PUT') @csrf
        <div class="form-group">
            <label for="InputFname">Project Name</label>
        <input class="form-control" id="InputFname" type="text" name="ufname" value="{{$_GET['findProject']['name']}}">
        <label for="InputFname">Project Name</label>
        <input class="form-control" id="InputFname" type="text" name="ufname" value="{{$_GET['findProject']['name']}}">
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Submit">
            <a style="float: right" class="btn btn-secondary" href="{{route('projects')}}">Back</a>
        </div>
    </form>
</div>
@endif


@endsection

