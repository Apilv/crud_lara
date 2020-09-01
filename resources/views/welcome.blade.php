@extends('layouts.master')

@section('content')

<h1>Hello Again</h1>
<br><br>
@foreach ($key as $value)
<h1>{{$value['id']}}</h1>
    
@endforeach


@endsection