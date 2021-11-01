@extends('dashboard.layout')

@section('content')
   
    <!-- ini adalah line untuk table -->
 <table class="table table-bordered table-dark">
 
  <thead>
    <tr>
    <th scope="col"class="text-center">Id</th>
      <th scope="col"class="text-center">Nama</th>
      <th scope="col"class="text-center">Nidn</th>
      <th scope="col"class="text-center">Kontak</th>
      <th scope="col"class="text-center">Alamat</th>
      <th scope="col"class="text-center">create at</th>
      <th scope="col"class="text-center">update at</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td>{{ $value->id}}</td>
         <td>{{ $value->nama}}</td>
         <td>{{ $value->nidn}}</td>  
         <td>{{ $value->kontak}}</td>
         <td>{{ $value->alamat}}</td>
         <td>{{ $value->create_at}}</td>
         <td>{{ $value->update_at}}</td>
    </tr>
  </tbody>
</table>

<div class="container">
  <div class="row">
  <div class="col text-center">
                <a class="btn btn-warning" href="{{route('dosen.index')}}">Kembali</a>
     </div>
  </div>
</div>

<h5 class="text-center">Page of Index Detail</h5>
<h6 class="text-center">Faiz Hanafi - 2021</h6>

@endsection
