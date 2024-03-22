@extends('layouts.app')
@section('title', 'Restaurant')

@section('content')
    <div class="container py-5">
        @foreach ($restaurants as $restaurant)
            <h1>
                <a class="text-decoration-none text-white "
                    href="{{ route('detail', ['endpoint' => $restaurant['endpoint']]) }}">
                    {{ $restaurant['name'] }}
                </a>
            </h1>
        @endforeach
    </div>
@endsection
