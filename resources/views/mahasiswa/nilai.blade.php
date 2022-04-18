@extends('mahasiswa.layout')
@section('content')
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

    </style>
    <div class="container mt-3">
        <h3 class="text-center">JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h3>
        <h2 class="text-center">KARTU HASIL STUDI (KHS)</h2>

        <br><br><br>

        <b>Nama :</b> {{ $mahasiswa->nama }}<br>
        <b>NIM : </b>{{ $mahasiswa->nim }}<br>
        <b>Kelas : </b> {{ $mahasiswa->kelas->nama_kelas }}<br>
        <hr>
        <table class="table table-bordered">
            <tr>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Nilai</th>
            </tr>
            @foreach ($mahasiswa->matakuliah as $nilai)
                <tr>
                    <td>{{ $nilai->nama_matkul }}</td>
                    <td>{{ $nilai->sks }}</td>
                    <td>{{ $nilai->semester }}</td>
                    <td>{{ $nilai->pivot->nilai }}</td>
                </tr>
            @endforeach
        </table>
        <br>
        <center><a class="btn btn-danger" href="{{ route('cetakpdf', $mahasiswa->nim) }}"> Cetak Ke PDF</a></center>
    </div>
@endsection
