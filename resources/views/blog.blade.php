@extends('layout.master')

@section('content')

<h1>Customers List</h1>
    <ul>
        @foreach ($customers as $cu)
            <li>{{ $cu }}</li>
        @endforeach
    </ul>

@endsection

