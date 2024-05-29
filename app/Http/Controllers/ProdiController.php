<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DB;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    //
    public function index(){
        $kampus = "Universitas Multi Data Palembang";
        $fakultas = ["Fakultas Ilkom","Fakultas Ilmu Ekonomi"];

        // return compact('fakultas','kampus');
        return view ('fakultas.index',compact('fakultas','kampus'));
    }

    public function allJoinFacade(){
        $kampus = "Universitas Multi Data Palembang";
        $result = DB::select('select mahasiswas.*,prodis.nama as nama_prodi from prodis,mahasiswas where prodis.id=mahasiswas.prodi_id');
        return view('prodi.index');
    }
}
