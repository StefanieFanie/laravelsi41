@extends('layout.master')

@section('title','Halaman Prodi')

@section('content')
<h2>Halaman Program Studi</h2>
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
</table>
@endsection
