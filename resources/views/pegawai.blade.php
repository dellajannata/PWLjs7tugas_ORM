@extends('main')
@section('content')


<div id="pegawai" class ="why">
  <div class="container">
     <div class="row">
        <div class="col-md-12">
           <div class="titlepage">
              <h2>Data Pegawai </h2>
              <br><br>
 
              <table style="margin-left:auto;margin-right:auto" border="1" cellpadding="60">
                  <thead style="color:white" bgcolor="black">
                    <tr>
                      <th>Nomor</th>
                      <th>Foto</th>
                      <th>Nama</th>
                      <th>Jenis Kelamin</th>
                      <th>Profesi</th>
                      <th>Email</th>
                    </tr>
                    </thead>
                
                    <tbody>
                
                    @foreach ($pegawai as $p)
                          <tr>
                          <td>{{$p->id}}</td>
                          <td><img height="100" width="180" src="{{asset('images/'.$p->foto)}}"></td>
                          <td>{{$p->nama}}</td>
                          <td>{{$p->jenisKelamin}}</td>
                          <td>{{$p->profesi}}</td>
                          <td>{{$p->email}}</td>         
                          </tr> 
                    @endforeach
                    
                    </tbody>

                </table>
                <br><br>
  
              {{$pegawai -> links()}}

        </div>
      </div>
    </div>
  </div>
</div>
@endsection