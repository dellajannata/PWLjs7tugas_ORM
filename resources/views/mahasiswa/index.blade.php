@extends('mahasiswa.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div class="float-right my-2"> <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input
                    Mahasiswa</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div>
        <form class=" form-inline pt-1" action={{ url('mahasiswa') }} method="GET">
            <div class="form-group">
                <label class="sr-only" value="{{ $keyword }}"></label>
                <input type="text" name="keyword" class="form-control mr-md-2 semail" placeholder="Cari Nama Mahasiswa">
            </div>
            <button type="submit" class="btn btn-outline-primary">Search</button>
        </form>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>No.HP</th>
            <th>E-mail</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($mahasiswa as $Mahasiswa)
            <tr>
                <td>{{ $Mahasiswa->nim }}</td>
                <td>{{ $Mahasiswa->nama }}</td>
                <td>{{ $Mahasiswa->tanggalLahir }}</td>
                <td>{{ $Mahasiswa->kelas }}</td>
                <td>{{ $Mahasiswa->jurusan }}</td>
                <td>{{ $Mahasiswa->nohp }}</td>
                <td>{{ $Mahasiswa->email }}</td>
                <td>
                    <form action="{{ route('mahasiswa.destroy', $Mahasiswa->nim) }}" method="POST"> <a
                            class="btn btn-info" href="{{ route('mahasiswa.show', $Mahasiswa->nim) }}">Show</a> <a
                            class="btn btn-primary" href="{{ route('mahasiswa.edit', $Mahasiswa->nim) }}">Edit</a>
                        @csrf
                        @method('DELETE') <button type="submit" class="btn btn-danger">Delete</button> </form>
                </td>
            </tr>
        @endforeach
    </table>
    <br><br>
    {{ $mahasiswa->links() }}
@endsection
