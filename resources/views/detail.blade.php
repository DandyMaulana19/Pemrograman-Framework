@extends('layouts.app')
@section('title', 'Detail')

@section('content')
    <div class="container py-5">
        <h1 class="text-center">Detail Restoran</h1>
        <h2>{{ $item['name'] }}</h2>
        <h2>{{ $item['description'] }}</h2>
        <a class="btn btn-danger" href="{{ url('/restaurant') }}">Back</a>
    </div>
@endsection
