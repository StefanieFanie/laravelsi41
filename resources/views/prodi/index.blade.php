@extends('layout.master')

@section('title','Halaman Prodi')

@section('content')
{{-- <h2>Halaman Program Studi</h2>
<table class="table table-striped">
    <tr>
        <th>NPM</th>
        <th>Nama</th>
        <th>Prodi</th>
    </tr>
    @foreach ($allmahasiswaprodi as $item)
        <tr>
            <td>{{ $item->npm }}</td>
            <td>{{ $item->nama_mahasiswa }}</td>
            <td>{{ $item->nama_prodi }}</td>
        </tr>
    @endforeach
</table> --}}

<div class="row pt-4">
    <div class="col">
        <h2>Prodi</h2>
        <div class="d-md-flex justify-content-md-end">
            <a href="{{ route('prodi.create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Nama</th><th>Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection
