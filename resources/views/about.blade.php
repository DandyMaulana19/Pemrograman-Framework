@extends('layouts.app')
@section('title', 'About')

@section('content')
    <div class="px-3 text-white ">
        Student at {{ $university }}
        <br>
        major {{ $major }}
        <br>
        faculty {{ $faculty }}
    </div>
@endsection
