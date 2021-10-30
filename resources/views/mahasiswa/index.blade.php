@extends('mahasiswa.layout')

@section('content')


 <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Nim</th>
      <th scope="col">Tgl Lahir</th>
      <th scope="col">Alamat</th>
      <th scope="col">Tahun Masuk</th>
      <th scope="col">create at</th>
      <th scope="col">update at</th>
      <th scope="col"width="280px">Action</th>
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
