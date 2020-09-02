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
        </tr>
        @endforeach
    </table>


@endsection


