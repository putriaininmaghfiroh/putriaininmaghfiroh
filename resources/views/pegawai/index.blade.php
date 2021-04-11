@extends('layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Data Siswa SMAN 1 Puri Mojokerto</h1>
            <a href="/pegawai/create" class="btn btn-primary my-3">+Tambah Data</a>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NISN</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $pegawai as $p )
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $p->nisn }}</td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->gender }}</td>
                        <td>{{ $p->address }}</td>
                        <td><a href="{{ $p->id }}/edit" class="btn btn-success">Edit </a>
                            <form action="{{ $p->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
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