@extends('layout')
@section('title', 'Form Ubah Data')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Ubah Pegawai</h1>
            <form method="post" action="/pegawai/{{ $pegawai->id }}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="nisn">Nomor Induk Siswa Nasional</label>
                    <input type="text" class="form-control @error('nisn') is-invalid @enderror" id="nisn" placeholder="Masukkan NISN" name="nisn" value="{{ $pegawai->nisn }}">
                    @error('nisn')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class=" form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukkan Nama" name="name" value="{{ $pegawai->name }}"">
                    @error('name')
                    <div class=" alert alert-danger">{{ $message }}
                </div>
                @enderror
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="text" class="form-control @error('gender') is-invalid @enderror" id="gender" placeholder="Jenis Kelamin" name="gender" value="{{ $pegawai->gender }}">
            @error('gender')
            <div class=" alert alert-danger">{{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Masukkan Alamat" name="address" value="{{ $pegawai->address }}">
            @error('address')
            <div class=" alert alert-danger">{{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
    </div>
</div>
</div>
@endsection