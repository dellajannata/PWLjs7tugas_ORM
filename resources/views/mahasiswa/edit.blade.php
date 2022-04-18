@extends('mahasiswa.layout') @section('content') <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header"> Edit Mahasiswa </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger"> <strong>Whoops!</strong> There were some problems with your
                            input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif <form method="post" enctype="multipart/form-data" action="{{ route('mahasiswa.update', $Mahasiswa->nim) }}" id="myForm">
                            @csrf @method('PUT')
                            <div class="form-group"> <label for="nim">Nim</label> <input type="text" name="nim"
                                    class="form-control" id="nim" value="{{ $Mahasiswa->nim }}" aria-describedby="nim">
                            </div>
                            <div class="form-group"> <label for="nama">Nama</label> <input type="text" name="nama"
                                    class="form-control" id="nama" value="{{ $Mahasiswa->nama }}"
                                    aria-describedby="nama"> </div>
                            <div class="form-group"> <label for="foto">Foto</label> <input type="file" name="foto"
                                    class="form-control" id="foto" value="{{ $Mahasiswa->foto }}"
                                    aria-describedby="foto"><br>
                                <img width="100px" src="{{ asset('storage/' . $Mahasiswa->foto) }}">
                            </div>
                            <div class="form-group"> <label for="tanggalLahir">Tanggal Lahir</label> <input type="date"
                                    name="tanggalLahir" class="form-control" id="tanggalLahir"
                                    value="{{ $Mahasiswa->tanggalLahir }}" aria-describedby="tanggalLahir"> </div>
                            <label for="kelas">Kelas</label>
                            <select name="kelas" class="form-control">
                                @foreach ($kelas as $kls)
                                    <option value="{{ $kls->id }}"
                                        {{ $Mahasiswa->kelas_id == $kls->id ? 'selected' : '' }}>
                                        {{ $kls->nama_kelas }}</option>
                                @endforeach
                            </select>
                            <div class="form-group"> <label for="jurusan">Jurusan</label> <input type="jurusan"
                                    name="jurusan" class="form-control" id="jurusan" value="{{ $Mahasiswa->jurusan }}"
                                    aria-describedby="jurusan"> </div>
                            <div class="form-group"> <label for="nohp">No.Hp</label> <input type="nohp" name="nohp"
                                    class="form-control" id="nohp" value="{{ $Mahasiswa->nohp }}"
                                    aria-describedby="nohp"> </div>
                            <div class="form-group"> <label for="email">E-mail</label> <input type="email" name="email"
                                    class="form-control" id="email" value="{{ $Mahasiswa->email }}"
                                    aria-describedby="email"> </div><button type="submit"
                                class="btn btn-primary">Submit</button>
                        </form>
                </div>
            </div>
        </div>
</div> @endsection
