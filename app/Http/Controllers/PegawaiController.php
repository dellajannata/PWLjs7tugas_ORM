<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function pegawai1(){
        $pegawai= Pegawai::paginate(3);
    
            return view('pegawai')
                    ->with('title', 'Data Pegawai')
                    ->with('pegawai', $pegawai);
        }
}
