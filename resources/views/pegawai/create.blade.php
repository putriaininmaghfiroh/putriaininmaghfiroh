@extends('layout')
@section('title', 'Form Tambah Data')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Data Input Siswa SMAN 1 Puri Mojokerto</h1>
            <form method="post" action="/pegawai">
                @csrf
                <div class="form-group">
                    <label for="nisn">Nomor Induk Siswa Nasional</label>
                    <input type="text" class="form-control @error('nisn') is-invalid @enderror" id="nisn" placeholder="Masukkan NISN" name="nisn" value="{{old('nisn')}}">
                    @error('nisn')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class=" form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukkan Nama" name="name" value="{{old('name')}}">
                    @error('name')
                    <div class=" alert alert-danger">{{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                    <input type="text" class="form-control @error('gender') is-invalid @enderror" id="gender" placeholder="Jenis Kelamin" name="gender" value="{{old('gender')}}">
                    @error('gender')
                    <div class=" alert alert-danger">{{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Masukkan Alamat" name="address" value="{{old('address')}}">
                    @error('address')
                    <div class=" alert alert-danger">{{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit Data</button>
            </form>
        </div>
    </div>
</div>
@endsection