@extends('layouts.app')
@section('title', 'Biodata - Edit Data')

@section('content')

    <div class="container py-5">
        <h1 class="mb-3">Edit data</h1>
        <form action="/biodata/{{ $biodata->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nim</label>
                <input type="number" class="form-control @error('nim') is-invalid @enderror" name="nim"
                    value="{{ $biodata->nim }}" id="exampleFormControlInput1" placeholder="123456">
                @error('nim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                    value="{{ $biodata->nama }}" id="exampleFormControlInput1" placeholder="Nama Pengguna">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ $biodata->email }}" id="exampleFormControlInput1" placeholder="user@example.com">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">No HP</label>
                <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone"
                    value="{{ $biodata->phone }}" id="exampleFormControlInput1" placeholder="081234***">
                @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Prodi</label>
                <select class="form-select @error('prodi') is-invalid @enderror" aria-label="Default select example"
                    name="prodi" value="{{ old('prodi') }}">
                    <option selected disabled>Pilih Prodi</option>
                    <option name="prodi" value="Rekayasa Perangkat Lunak {{ old('prodi') }}"
                        {{ $biodata->prodi == 'Rekayasa Perangkat Lunak' ? 'selected' : '' }}>
                        Rekayasa Perangkat Lunak
                    </option>
                    <option name="prodi" value="Informatika {{ old('prodi') }}"
                        {{ $biodata->prodi == 'Informatika' ? 'selected' : '' }}>
                        Informatika
                    </option>
                    <option name="prodi" value="Sains Data {{ old('prodi') }}"
                        {{ $biodata->prodi == 'Sains Data' ? 'selected' : '' }}>
                        Sains Data
                    </option>
                    <option name="prodi" value="Teknologi Informasi {{ old('prodi') }}"
                        {{ $biodata->prodi == 'Teknologi Informasi' ? 'selected' : '' }}>
                        Teknologi Informasi
                    </option>
                    <option name="prodi" value="Sistem Informasi {{ old('prodi') }}"
                        {{ $biodata->prodi == 'Sistem Informasi' ? 'selected' : '' }}>
                        Sistem Informasi
                    </option>
                    <option name="prodi" value="Teknik Telekomunikasi {{ old('prodi') }}"
                        {{ $biodata->prodi == 'Teknik Telekomunikasi' ? 'selected' : '' }}>
                        Teknik Telekomunikasi
                    </option>
                    <option name="prodi" value="Teknik Logistik {{ old('prodi') }}"
                        {{ $biodata->prodi == 'Teknik Logistik' ? 'selected' : '' }}>
                        Teknik Logistik
                    </option>
                    <option name="prodi" value="Teknik Industri {{ old('prodi') }}"
                        {{ $biodata->prodi == 'Teknik Industri' ? 'selected' : '' }}>
                        Teknik Industri
                    </option>
                    <option name="prodi" value="Teknik Elektro {{ old('prodi') }}"
                        {{ $biodata->prodi == 'Teknik Elektro' ? 'selected' : '' }}>
                        Teknik Elektro
                    </option>
                    <option name="prodi" value="Teknik Komputer {{ old('prodi') }}"
                        {{ $biodata->prodi == 'Teknik Komputer' ? 'selected' : '' }}>
                        Teknik Komputer
                    </option>
                    <option name="prodi" value="Bisnis Digital {{ old('prodi') }}"
                        {{ $biodata->prodi == 'Bisnis Digital' ? 'selected' : '' }}>
                        Bisnis Digital
                    </option>
                </select>
                @error('prodi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="formFile" class="form-label">Foto Diri</label>
                <input class="form-control @error('img') is-invalid @enderror" name="img" type="file"
                    value="{{ asset('public/image/' . $biodata->img) }}" id="formFile" onchange="readFile(this)">
                @error('img')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button class="btn btn-success" type="submit">Edit</button>
            <a href="/biodata" class="btn btn-danger">Back</a>
        </form>
    </div>

@endsection
