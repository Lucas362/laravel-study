@extends('layout')

@section('content')
    <h1>Customers</h1>

    <ul>
        @foreach ($custumers as $custumer)
            <li>{{$custumer}}</li>
        @endforeach
    </ul>
@endsection