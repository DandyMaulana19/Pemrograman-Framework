@extends('layouts.app')
@section('title', 'Biodata - Landing Page')

@section('content')
    <div class="container py-5">
        <h1 class="mb-3">Data Diri</h1>
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($biodatas as $biodata)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $biodata->nim }}</td>
                                <td>{{ $biodata->nama }}</td>
                                <td>{{ $biodata->prodi }}</td>
                                <td>
                                    <a href="/biodata/{{ $biodata->id }}" class="btn btn-success">Show</a>
                                    <a href="/biodata/{{ $biodata->id }}/edit" class="btn btn-warning">Edit</a>
                                    <form action="/biodata/{{ $biodata->id }}" class="d-inline-block" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Apakah anda yakin ?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
