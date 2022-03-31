@extends('main')
@section('content')


<div id="barang" class ="why">
  <div class="container">
     <div class="row">
        <div class="col-md-12">
           <div class="titlepage">
              <h2>Data Barang </h2>
              <br><br>
 
              <table style="margin-left:auto;margin-right:auto" border="1" cellpadding="10">
                <thead style="color:white" bgcolor="black">
                    <tr>
                        <th>Nomor</th>
                        <th>Gambar</th>
                        <th>Nama Hosting</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
            
                <tbody>
            
                    @foreach ($barang as $b)
                        <tr>
                            <td>{{ $b->id }}</td>
                            <td><img height='100' width='100' src="{{asset('images/'.$b->gambar)}}"></td>
                            <td>{{ $b->namaBarang }}</td>
                            <td>{{ $b->harga }}</td>
                            <td>{{ $b->deskripsi }}</td>
                        </tr>
                    @endforeach
            
                </tbody>
            </table>
              <br><br>
            
              {{$barang->links()}}

          </div>
      </div>
    </div>
  </div>
</div>
@endsection