@extends('layout/main')
@section('title'.'Form Students')

@section('container')
<div class="container">
    <h1 class="mt-3">Form Students</h1>

    <form method="POST" action="/students">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                placeholder="Masukan nama" name="nama">
            @error('nama')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim"
                placeholder="Masukan nim" name="nim">
            @error('nim')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
            
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Masukan email" name="email">
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" placeholder="Masukan jurusan" name="jurusan">
        </div>

        <button type="submit" class="btn btn-primary">Tambah Data</button>

    </form>
</div>
@endsection
