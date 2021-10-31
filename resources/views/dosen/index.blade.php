@extends('dashboard.layout')

@section('content')
<!-- ini adalah file cssnya untuk center table -->


   
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
      <th scope="col"class="text-center">
      <div class="float-center">
                <a class="btn btn-success" href="{{ route('mahasiswa.create') }}">+ Dosen</a>
     </div>
     Action
      </th>
    </tr>
  </thead>
  <tbody>
      @foreach ($dosen as $key=>$value) 
    <tr>
         <td>{{ $value->id}}</td>
         <td>{{ $value->nama}}</td>
         <td>{{ $value->nim}}</td>  
         <td>{{ $value->tanggal_lahir}}</td>
         <td>{{ $value->alamat}}</td>
         <td>{{ $value->tahun_masuk}}</td>
         <td>{{ $value->create_at}}</td>
         <td>{{ $value->update_at}}</td>
         <td>
         <button type="submit" class="btn btn-info">Show</button>
         <button type="submit" class="btn btn-primary">Edit</button>
         <button type="submit" class="btn btn-danger">Delete</button>
         </td>
        </tr>
    @endforeach
  </tbody>

</table>

<h5 class="text-center">Page of Index Dosen</h5>
<h6 class="text-center">Faiz Hanafi - 2021</h6>

@endsection
