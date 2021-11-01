@extends('dashboard.layout')

@section('content')
   
    <!-- ini adalah line untuk table -->
 <table class="table table-bordered table-dark">
 
  <thead>
    <tr>
      <th scope="col"class="text-center">Id</th>
      <th scope="col"class="text-center">Nama</th>
      <th scope="col"class="text-center">Nim</th>
      <th scope="col"class="text-center">Tgl-Lahir</th>
      <th scope="col"class="text-center">Alamat</th>
      <th scope="col"class="text-center">Masuk</th>
      <th scope="col"class="text-center">create at</th>
      <th scope="col"class="text-center">update at</th>
    </tr>
  </thead>
  <tbody>
    <tr>
         <td>{{ $mahasiswa->id}}</td>
         <td>{{ $mahasiswa->nama}}</td>
         <td>{{ $mahasiswa->nim}}</td>  
         <td>{{ $mahasiswa->tanggal_lahir}}</td>
         <td>{{ $mahasiswa->alamat}}</td>
         <td>{{ $mahasiswa->tahun_masuk}}</td>
         <td>{{ $mahasiswa->create_at}}</td>
         <td>{{ $mahasiswa->update_at}}</td>

    </tr>
  </tbody>

</table>


<div class="container">
  <div class="row">
  <div class="col text-center">
                <a class="btn btn-warning" href="{{route('mahasiswa.index')}}">Kembali</a>
     </div>
  </div>
</div>

<h5 class="text-center">Page of Index Detail</h5>
<h6 class="text-center">Faiz Hanafi - 2021</h6>

@endsection
