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
        </tr>
        @endforeach
    </table>


@endsection

