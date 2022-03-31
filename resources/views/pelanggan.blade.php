@extends('main')
@section('content')


<div id="pelanggan" class ="why">
  <div class="container">
     <div class="row">
        <div class="col-md-12">
           <div class="titlepage">
              <h2>Data Pelanggan </h2>
              <br><br>
 
              <table style="margin-left:auto;margin-right:auto" border="1" cellpadding="10">
                <thead style="color:white" bgcolor="black">
                    <tr>
                        <th>Nomor</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Email</th>
                        <th>No Telp</th>
                    </tr>
                </thead>
        
                <tbody>
        
                    @foreach ($pelanggan as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td><img height='100' width='100' src="{{ asset('images/' . $p->foto) }}"></td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->alamat }}</td>
                            <td>{{ $p->jenisKelamin }}</td>
                            <td>{{ $p->email }}</td>
                            <td>{{ $p->noTelp }}</td>
                        </tr>
                    @endforeach
        
                </tbody>
            </table>
              <br><br>

              {{$pelanggan->links()}}

          </div>
      </div>
    </div>
  </div>
</div>
@endsection