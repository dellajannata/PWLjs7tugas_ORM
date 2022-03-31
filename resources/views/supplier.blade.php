@extends('main')
@section('content')


<div id="supplier" class ="why">
  <div class="container">
     <div class="row">
        <div class="col-md-12">
           <div class="titlepage">
              <h2>Data Supplier </h2>
              <br><br>
 
              <table style="margin-left:auto;margin-right:auto" border="1" cellpadding="10">
                  <thead style="color:white" bgcolor="black">
                    <tr>
                      <th>Nomor</th>
                      <th>Logo</th>
                      <th>Nama</th>
                      <th>Kategori</th>
                      <th>Email</th>
                    </tr>
                    </thead>
                
                    <tbody>
                
                    @foreach ($supplier as $s)
                          <tr>
                          <td>{{$s->id}}</td>
                          <td><img height="80" width="160" src="{{asset('images/'.$s->gambar)}}"></td>
                          <td>{{$s->nama}}</td>
                          <td>{{$s->kategori}}</td>
                          <td>{{$s->email}}</td>         
                          </tr> 
                    @endforeach
                    
                    </tbody>

              </table>
              <br><br>

              {{$supplier -> links()}}

          </div>
      </div>
    </div>
  </div>
</div>
@endsection