@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <div class="text-white px-3">
        My name {{ $name }}
        <br>
        I'm {{ $age }} years old
        <br>
        Gender {{ $gender }}
    </div>
@endsection
