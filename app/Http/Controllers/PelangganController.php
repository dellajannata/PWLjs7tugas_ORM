<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function pelanggan1(){
        
        $pelanggan = Pelanggan::paginate(5);
        return view('pelanggan')
                ->with('title','Data Pelanggan')
                ->with('pelanggan',$pelanggan);
        }
    }