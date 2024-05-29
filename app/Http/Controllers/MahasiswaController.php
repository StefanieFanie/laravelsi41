<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    //Tanda tanya tanda tanya artinya prepared statement agar lebih secure dari serangan SQL Injection
    public function insert(){
        $result=DB::insert("insert into mahasiswas(npm, nama_mahasiswa, tempat_lahir, tanggal_lahir, alamat, created_at)
        values(?,?,?,?,?,?)",['2224250037','Jenni','Palembang','2002-12-26','Sudirman',now()]);
        dump($result);
    }

    public function update(){
        $result=DB::update("update mahasiswas set nama_mahasiswa='Ali', updated_at = now()
        where npm = ?",['2224250037']);
        dump($result);
    }

    public function delete(){
        $result=DB::delete("delete from mahasiswas where npm = ?",['2224250037']);
        dump($result);
    }

    public function select(){
        $kampus="Universitas Multi Data Palembang";
        $result=DB::select('select * from mahasiswas');
        // dump($result);
        return view('mahasiswa.index',['allmahasiswa' => $result, 'kampus' => $kampus]);
    }

    public function insertQb(){
        $result=DB::table('mahasiswas')->insert(
            [   'npm' => "2226240136",
                "nama_mahasiswa" => "Hendra",
                "tempat_lahir" => "Lampung",
                "tanggal_lahir" => "2002-12-17",
                "alamat" => "Palembang",
                "created_at" => now()
            ]
        );
        dump($result);
    }

    public function updateQb(){
        $result=DB::table('mahasiswas')
        ->where('npm','2226240136')
        ->update(
            [
                "nama_mahasiswa" => "Hendra Raharjo",
                "updated_at" => now()
            ]
        );
        dump($result);
    }

    public function deleteQb(){
        $result=DB::table('mahasiswas')
        ->where('npm','2226240136')
        ->delete();
        dump($result);
    }

    public function selectQb(){
        $kampus="Universitas Multi Data Palembang";
        $result=DB::table('mahasiswas')->get();
        // dump($result);
        return view('mahasiswa.index',['allmahasiswa' => $result, 'kampus' => $kampus]);
    }

    public function insertElq(){
        $mahasiswa = new Mahasiswa();
        $mahasiswa->npm = '2226240101';
        $mahasiswa->nama_mahasiswa = "Dewi";
        $mahasiswa->tempat_lahir = "Palembang";
        $mahasiswa->tanggal_lahir = '2002-12-20';
        $mahasiswa->alamat = "Rajawali";
        $mahasiswa->save();
        dump($mahasiswa);
    }

    public function updateElq(){
        $mahasiswa = Mahasiswa::where('npm','2226240101')->first();
        $mahasiswa->nama_mahasiswa = "Hendra Hendarto";
        $mahasiswa->save();
        dump($mahasiswa);
    }

    public function deleteElq(){
        $mahasiswa = Mahasiswa::where('npm','2226240101')->first();
        $mahasiswa->delete();
        dump($mahasiswa);
    }

    public function selectElq(){
        $kampus="Universitas Multi Data Palembang";
        $result=Mahasiswa::all();
        // dump($result);
        return view('mahasiswa.index',['allmahasiswa' => $result, 'kampus' => $kampus]);
    }
}
