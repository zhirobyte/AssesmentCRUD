@extends('mahasiswa.layout')

@section('content')

   
 <!-- <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-center">
                <h1>CRUD ASSESMENT BY FAIZ</h1>
            </div>
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Tambah data</a>
    </div>   
     </div>
 </div>

<table class="table table-bordered">
    <tr>
 
      
        
    </tr>
        @foreach ($mahasiswa as $mahasiswa)
        <td>{{ ++$id }}</td>
         <td>{{ $mahasiswa->nama }}</td>
         <td>{{ $mahasiswa->nim }}</td>  
         <td>{{ $mahasiswa->tanggal_lahir }}</td>
         <td>{{ $mahasiswa->alamat }}</td>
         <td>{{ $mahasiswa->tahun_masuk }}</td>
         <td>{{ $mahasiswa->create_at }}</td>
         <td>{{ $mahasiswa->update_at }}</td>
        <td>
                    <form action="{{ route('mahasiswa.destroy',$mahasiswa->id) }}" method="POST">
    
                        <a class="btn btn-info" href="{{ route('mahasiswa.show',$mahasiswa->id) }}">Tampilkan</a>
        
                        <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$mahasiswa->id) }}">Ubah</a>
    
                        @csrf
                        @method('DELETE')
        
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    
        {!! $mahasiswa->links() !!}
         -->
 <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Tgl Lahir</th>
      <th scope="col">Alamat</th>
      <th scope="col">Tahun Masuk</th>
      <th scope="col">create at</th>
      <th scope="col">update at</th>
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
    </tr>
    @endforeach
  </tbody>

</table>


@endsection