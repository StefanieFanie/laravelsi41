<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    //
    public function index(){
        // $kampus = "Universitas Multi Data Palembang";
        // $fakultas = ["Fakultas Ilkom","Fakultas Ilmu Ekonomi"];

        // // return compact('fakultas','kampus');
        // return view ('fakultas.index',compact('fakultas','kampus'));

        // prodi adalah model jadi harus use App\Models\Prodi;
        $prodi = Prodi::all();
        return view('prodi.index')->with('prodis',$prodis);
    }

    public function allJoinFacade(){
        $kampus = "Universitas Multi Data Palembang";
        // alias name dari field adalah nama_prodi
        $result = DB::select('select mahasiswas.*,prodis.nama as nama_prodi from prodis,mahasiswas
        where prodis.id=mahasiswas.prodi_id');

        return view('prodi.index',['allmahasiswaprodi' => $result, 'kampus' => $kampus]);
    }

    public function allJoinElq(){
        $prodis = Prodi::with('mahasiswas')->get();

        foreach ($prodis as $prodi) {
            echo "Program Studi";
            echo "<h3>$prodi->nama</h3>";
            echo "<hr>Mahasiswa<br>";
            foreach ($prodi->mahasiswas as $mhs) {
                echo $mhs->nama_mahasiswa;
                echo "<br>";
            }
            echo "<hr>";
        }
    }

    public function create(){
        return view('prodi.create'); // Nama folder prodi dan nama file create
    }

    public function store(Request $request){
        // dump($request);
        $validateData = $request->validate([
            'nama' => 'required|min:5|max:20'
        ]);
        // dump($validateData);
        // echo $validateData['nama'];
        $prodi = new Prodi();
        $prodi->nama = $validateData['nama'];
        $prodi->save();

        $request->session()->flash('info','Data berhasil disimpan');
        return redirect('prodi/create');
    }
}
