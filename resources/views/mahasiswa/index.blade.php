@extends('layout.master')
@section('title','Halaman mahasiswa')

@section('content')
    <h2>Mahasiswa</h2>
    <table class="table table-striped">
        <tr>
            <th scope="col">NPM</th>
            <th scope="col">Nama</th>
            <th scope="col">Nama Prodi</th>
        </tr>
        @foreach ($allmahasiswa as $item)
            <tr>
                <td>{{ $item->npm }}</td>
                <td>{{ $item->nama_mahasiswa }}</td>
                <td>{{ $item->prodi->nama }}</td>
            </tr>
        @endforeach
    </table>
@endsection
