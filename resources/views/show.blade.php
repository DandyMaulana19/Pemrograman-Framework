@extends('layouts.app')
@section('title', 'Biodata - View Detail')

@section('content')
    <div class="container py-5">
        <div class="d-flex justify-content-center align-items-center">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/image/' . $biodata->img) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 class="card-title">{{ $biodata->nim }}</h6>
                    <h5 class="card-title">{{ $biodata->nama }}</h5>
                    <p class="card-text">Email : {{ $biodata->email }}</p>
                    <p class="card-text lh-1 ">No HP : {{ $biodata->phone }}</p>
                    <p class="card-text lh-1">Prodi : {{ $biodata->prodi }}</p>
                    <a href="/biodata" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
