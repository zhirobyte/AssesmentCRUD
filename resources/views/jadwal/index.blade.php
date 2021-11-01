@extends('dashboard.layout')

@section('content')
<!-- ini adalah file cssnya untuk center table -->


   
    <!-- ini adalah line untuk table -->
 <table class="table table-bordered table-dark">
 
  <thead>
    <tr>
      <th scope="col"class="text-center">Id</th>
      <th scope="col"class="text-center">Mahasiswa</th>
      <th scope="col"class="text-center">Dosen</th>
      <th scope="col"class="text-center">Judul</th>
      <th scope="col"class="text-center">Deskripsi</th>
      <th scope="col"class="text-center">Awal</th>
      <th scope="col"class="text-center">Akhir</th>
      <th scope="col"class="text-center">Create at</th>
      <th scope="col"class="text-center">Update at</th>
      <th scope="col"class="text-center" width="230px">
      Action
      <div class="float-center" >
                <a class="btn btn-success" href="{{ route('jadwal.create') }}">+ Jadwal</a>
     </div>
  
    </tr>
  </thead>
  <tbody>
      @foreach ($jadwal as $key=>$value) 
         <tr>

         <td>{{ $value->id}}</td>
         <td>{{ $value->getDataMahasiswa()->nama}}</td>
         <td>{{ $value->getDataDosen()->nama}}</td>  
         <td>{{ $value->judul}}</td>
         <td>{{ $value->deskripsi}}</td>
         <td>{{ $value->awal}}</td>
         <td>{{ $value->akhir}}</td>
         <td>{{ $value->create_at}}</td>
         <td>{{ $value->update_at}}</td>

         <td>

        <!-- ini tuh adalah baris button dengan inline block -->
        <form style ="display:inline-block;">
        <a type="submit" class="btn btn-info" href="{{ route('jadwal.show', $value->id)}}">Detail</a>
        </form>

          <!-- ini tuh adalah baris button edit dengan inline block -->
        <form style ="display:inline-block;">
        <a type="submit" class="btn btn-primary" href="{{ route('jadwal.edit',$value->id) }}">Edit</a>  
        </form>

 
       <!-- ini tuh adalah baris button delete dengan inline block --> 
        <form action="{{ route('dosen.destroy',$value->id) }}" style ="display:inline-block;" method="POST">
            @csrf
            @method('DELETE')
        <button type="submit" class="btn btn-danger" href="{{ route('jadwal.destroy',$value->id)}}">Delete</button>
        </form>
    </tr>
      
    @endforeach
  </tbody>

</table>

<h5 class="text-center">Page of Index Dosen</h5>
<h6 class="text-center">Faiz Hanafi - 2021</h6>

@endsection
