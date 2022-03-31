<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function barang1(){
        
        $barang = Barang::paginate(3);
        // $barang = Barang::all();
        // $barang = Barang::find(3);
        // $barang = Barang::where('jenis','Cute Hosting SSD')->first();
        return view('barang')
                ->with('title','Data Barang')
                ->with('barang',$barang);
        }
}