@extends('layouts.app')
@section('title', 'Biodata - Add Data')

@section('content')
    <div class="container py-5">
        <h1 class="mb-3">Tambah data</h1>
        <form action="/biodata" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nim</label>
                <input type="number" class="form-control @error('nim') is-invalid @enderror" name="nim"
                    value="{{ old('nim') }}" id="exampleFormControlInput1" placeholder="123456">
                @error('nim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                    value="{{ old('nama') }}" id="exampleFormControlInput1" placeholder="Nama Pengguna">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" id="exampleFormControlInput1" placeholder="user@example.com">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">No HP</label>
                <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone"
                    value="{{ old('phone') }}" id="exampleFormControlInput1" placeholder="081234***">
                @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Prodi</label>
                <select class="form-select @error('prodi') is-invalid @enderror" aria-label="Default select example"
                    name="prodi">
                    <option selected disabled>Pilih Prodi</option>
                    <option name="prodi" value="Rekayasa Perangkat Lunak {{ old('prodi') }}">Rekayasa Perangkat Lunak
                    </option>
                    <option name="prodi" value="Informatika {{ old('prodi') }}">Informatika</option>
                    <option name="prodi" value="Sains Data {{ old('prodi') }}">Sains Data</option>
                    <option name="prodi" value="Teknologi Informasi {{ old('prodi') }}">Teknologi Informasi</option>
                    <option name="prodi" value="Sistem Informasi {{ old('prodi') }}">Sistem Informasi</option>
                    <option name="prodi" value="Teknik Telekomunikasi {{ old('prodi') }}">Teknik Telekomunikasi</option>
                    <option name="prodi" value="Teknik Logistik {{ old('prodi') }}">Teknik Logistik</option>
                    <option name="prodi" value="Teknik Industri {{ old('prodi') }}">Teknik Industri</option>
                    <option name="prodi" value="Teknik Elektro {{ old('prodi') }}">Teknik Elektro</option>
                    <option name="prodi" value="Teknik Komputer {{ old('prodi') }}">Teknik Komputer</option>
                    <option name="prodi" value="Bisnis Digital {{ old('prodi') }}">Bisnis Digital</option>
                </select>
                @error('prodi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="formFile" class="form-label">Foto Diri</label>
                <input class="form-control @error('img') is-invalid @enderror" name="img" value="{{ old('img') }}"
                    type="file" id="formFile">
                @error('img')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button class="btn btn-success" type="submit">Tambah</button>
        </form>
    </div>
@endsection
