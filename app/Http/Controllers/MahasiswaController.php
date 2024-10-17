<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil as ProfilModel;

class MahasiswaController extends Controller
{
    //
    public function index($nilai) {
        $arrMahasiswa = ['Risa Lestari', 'Rudi Hermawan','Bambang Kusumo','Lisa Permata'];
        return view('universitas.mahasiswa', ['mahasiswa'=>$arrMahasiswa, 'jurusan'=>'Teknik Informatika'])
        ->with('nilai',$nilai);
    }

    public function tampil() {
        $data = ProfilModel::all();
        printf($data);
        return "Ini adalah proses dari controller";
    }
}
