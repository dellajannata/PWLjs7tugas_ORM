<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Kelas;
use App\Models\Mahasiswa_MataKuliah;
use Illuminate\Support\Facades\Storage;
use PDF;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // //fungsi eloquent menampilkan data menggunakan paginaon
        // $keyword = $request->keyword;
        // $mahasiswa = Mahasiswa::where('nama', 'LIKE', '%'.$keyword.'%')->paginate(5); // Mengambil 5 isi tabel
        // // ----
        // $posts = Mahasiswa::orderBy('nim', 'desc')->paginate(6); 
        // return view('mahasiswa.index', compact('mahasiswa','keyword'))
        //         ->with('i', ($request->input('page', 1) - 1) * 5);
        //fungsi eloquent menampilkan data menggunakan pagination
        $mahasiswa = Mahasiswa::with('kelas')->get(); // Mengambil semua isi tabel
        $paginate = Mahasiswa::orderBy('nim', 'desc')->paginate(3);
        return view('mahasiswa.index', ['mahasiswa' => $mahasiswa, 'paginate' => $paginate]);
    }
    public function search1(Request $request)
    {
        $keyword = $request->keyword;
        $paginate = Mahasiswa::where('nama', 'LIKE', "%" . $keyword . "%")->paginate(3);
        return view('mahasiswa.index', compact('paginate'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all(); //mendapatkan data dari tabel kelas
        return view('mahasiswa.create', ['kelas' => $kelas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:1024',
            'tanggalLahir' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'nohp' => 'required',
            'email' => 'required'
        ]);

        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = $request->get('nim');
        $mahasiswa->nama = $request->get('nama');
        $mahasiswa->foto = $request->file('foto')->store('images', 'public');
        $mahasiswa->tanggalLahir = $request->get('tanggalLahir');
        $mahasiswa->jurusan = $request->get('jurusan');
        $mahasiswa->nohp = $request->get('nohp');
        $mahasiswa->email = $request->get('email');

        $kelas = new Kelas;
        $kelas->id = $request->get('kelas');

        //fungsi eloquent untuk menambahkan data dengan relasi belongsTo
        $mahasiswa->kelas()->associate($kelas);
        $mahasiswa->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('mahasiswa.index')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nim)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        $mahasiswa = Mahasiswa::with('kelas')->where('nim', $nim)->first();
        return view('mahasiswa.detail', ['Mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nim)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        $Mahasiswa = Mahasiswa::with('kelas')->where('nim', $nim)->first();
        $kelas = Kelas::all(); //mendapatkan data dari tabel kelas
        return view('mahasiswa.edit', compact('Mahasiswa', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nim)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:1024',
            'tanggalLahir' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'nohp' => 'required',
            'email' => 'required'
        ]);

        $mahasiswa = Mahasiswa::with('kelas')->where('nim', $nim)->first();
        $mahasiswa->nim = $request->get('nim');
        $mahasiswa->nama = $request->get('nama');
        if($mahasiswa->foto && file_exists(storage_path('app/public/'. $mahasiswa->foto))){
            \Storage::delete('public/'. $mahasiswa->foto);
        }
        $image_name = $request->file('foto')->store('images', 'public');
        $mahasiswa->foto = $image_name;
        $mahasiswa->tanggalLahir = $request->get('tanggalLahir');
        $mahasiswa->jurusan = $request->get('jurusan');
        $mahasiswa->nohp = $request->get('nohp');
        $mahasiswa->email = $request->get('email');
        $mahasiswa->save();

        $kelas = new Kelas;
        $kelas->id = $request->get('kelas');

        //fungsi eloquent untuk menambahkan data dengan relasi belongsTo
        $mahasiswa->kelas()->associate($kelas);
        $mahasiswa->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('mahasiswa.index')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nim)
    {
        //fungsi eloquent untuk menghapus data 
        Mahasiswa::find($nim)->delete();
        return redirect()->route('mahasiswa.index')
            ->with('success', 'Mahasiswa Berhasil Dihapus');
    }
    public function mahasiswa_matakuliah1($nim)
    {

        $mahasiswa = Mahasiswa::where('nim', $nim)->first();
        return view('mahasiswa.nilai', ['mahasiswa' => $mahasiswa]);
    }
    public function cetak_pdf($nim){
        $mahasiswa = Mahasiswa::where('nim', $nim)->first();
        $pdf = PDF::loadview('mahasiswa.cetakpdf',['mahasiswa'=>$mahasiswa]);
        return $pdf->stream();
    }
}
