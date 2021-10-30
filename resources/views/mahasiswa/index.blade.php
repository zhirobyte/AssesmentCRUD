@extends('mahasiswa.layout')

@section('content')
<!-- ini adalah file cssnya untuk center table -->
  
<style type="text/css">
    .table {
        margin: 60px auto;
        width: 85%;
    }
        h3 {
    color:  white;
    }
        h5 {
    color:  white;
    }
        
 </style>


    <h3 class="text-center">Assesment CRUD</h3>
    <h5 class="text-center">Faiz Hanafi</h5>

    <!-- 
ini adalah line untuk table -->
 <table class="table table-bordered table-dark">
 
  <thead>
    <tr>
      <th scope="col"class="text-center">ID</th>
      <th scope="col"class="text-center">Nama</th>
      <th scope="col"class="text-center">Nim</th>
      <th scope="col"class="text-center">Tgl Lahir</th>
      <th scope="col"class="text-center">Alamat</th>
      <th scope="col"class="text-center">Tahun Masuk</th>
      <th scope="col"class="text-center">create at</th>
      <th scope="col"class="text-center">update at</th>
      <th scope="col"width="290px">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($mahasiswa as $key=>$value) 
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


@endsection
