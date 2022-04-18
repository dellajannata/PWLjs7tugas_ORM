
<!DOCTYPE html>
<html>

<head>
    <title>LAPORAN KARTU HASIL STUDI {{ $mahasiswa->nama}} {{ $mahasiswa->nim}}</title>
</head>

<body>
    <center>
        <h3 class="text-center">JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h3>
        <h2 class="text-center">KARTU HASIL STUDI (KHS)</h2>
    </center>
    <br>
        <b>Nama:</b> {{ $mahasiswa->nama}}<br>
        <b>NIM: </b>{{ $mahasiswa->nim}}<br>
        <b>Kelas: </b> {{ $mahasiswa->kelas->nama_kelas}}<br>

        <br><br><br>
        <table class="table table-bordered" width="700px">
            <tr>
                <th>Matakuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Nilai</th>
            </tr>
            <br>
                @foreach ($mahasiswa -> matakuliah as $nilai)
                <tr>
                    <td>{{ $nilai->nama_matkul }}</td>
                    <td align="center">{{ $nilai->sks }}</td>
                    <td align="center">{{ $nilai->semester }}</td>
                    <td align="center">{{ $nilai->pivot->nilai }}</td>
                </tr>
            @endforeach
    </table>
</body>

</html>
