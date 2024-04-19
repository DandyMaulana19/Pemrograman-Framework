@extends('layouts.app')
@section('title', 'Contact')

@section('content')
    <div class="text-white px-3">
        My email {{ $email }}
        <br>
        My phone number {{ $phone }}
        <br>
        Now stay at {{ $address }}
    </div>
@endsection
