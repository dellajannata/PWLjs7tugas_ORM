@extends('mahasiswa.layout') @section('content') <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header"> Tambah Mahasiswa </div>
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
                        @endif <form method="post" enctype="multipart/form-data" action="{{ route('mahasiswa.store') }}" id="myForm"> @csrf <div
                                class="form-group"> <label for="nim">Nim</label> <input type="text" name="nim"
                                    class="form-control" id="nim" aria-describedby="nim"> </div>
                            <div class="form-group"> <label for="nama">Nama</label> <input type="nama" name="nama"
                                    class="form-control" id="nama" aria-describedby="nama"> </div>
                            <div class="form-group"> <label for="foto">Foto</label> <input type="file" name="foto"
                                    class="form-control" id="foto" aria-describedby="foto"> </div>
                            <div class="form-group"> <label for="tanggalLahir">Tanggal Lahir</label> <input type="date"
                                    name="tanggalLahir" class="form-control" id="tanggalLahir"
                                    aria-describedby="tanggalLahir"> </div>
                            <div class="form-group">
                                <label for="kelas">Kelas</label>
                                <select class="form-control" name="kelas">
                                    @foreach ($kelas as $kls)
                                        <option value="{{ $kls->id }}">{{ $kls->nama_kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group"> <label for="jurusan">Jurusan</label> <input type="jurusan"
                                    name="jurusan" class="form-control" id="jurusan" aria-describedby="jurusan"> </div>
                            <div class="form-group"> <label for="nohp">No.Hp</label> <input type="nohp" name="nohp"
                                    class="form-control" id="nohp" aria-describedby="nohp"> </div>
                            <div class="form-group"> <label for="email">Email</label> <input type="email" name="email"
                                    class="form-control" id="email" aria-describedby="email"> </div><button type="submit"
                                class="btn btn-primary">Submit</button>
                        </form>
                </div>
            </div>
        </div>
</div> @endsection
