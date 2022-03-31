<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //fungsi eloquent menampilkan data menggunakan paginaon
        $keyword = $request->keyword;
        $mahasiswa = Mahasiswa::where('nama', 'LIKE', '%'.$keyword.'%')->paginate(5); // Mengambil 5 isi tabel
        // ----
        $posts = Mahasiswa::orderBy('nim', 'desc')->paginate(6); 
        return view('mahasiswa.index', compact('mahasiswa','keyword'))
                ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([ 'nim' => 'required', 'nama' => 'required', 'tanggalLahir' => 'required', 'kelas' => 'required',
        'jurusan' => 'required', 'nohp' => 'required','email' => 'required',
        ]);
        //fungsi eloquent untuk menambah data 
        Mahasiswa::create($request->all());

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
        $Mahasiswa = Mahasiswa::find($nim);
        return view('mahasiswa.detail', compact('Mahasiswa'));
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
        $Mahasiswa = Mahasiswa::find($nim);
        return view('mahasiswa.edit', compact('Mahasiswa'));


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
        //melakukan validasi data
        $request->validate([ 'nim' => 'required', 'nama' => 'required', 'tanggalLahir' => 'required', 'kelas' => 'required',
        'jurusan' => 'required', 'nohp' => 'required','email' => 'required',
        ]);

        //fungsi eloquent untuk mengupdate data inputan kita 
        Mahasiswa::find($nim)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama 
        return redirect()->route('mahasiswa.index')
        ->with('success', 'Mahasiswa Berhasil Diupdate');


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
        -> with('success', 'Mahasiswa Berhasil Dihapus');

    }
}
