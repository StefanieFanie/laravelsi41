@extends('layout.master')

@section('title','Halaman Prodi')

@section('content')
<div class="row pt-4">
    <div class="col">
        <h2>Profil Prodi {{ $prodi->nama }}</h2>
        <table class="table table-striped">
            <tr>
                <th>Kode Prodi</th>
                <td>{{ $prodi->id }}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ $prodi->nama }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection
