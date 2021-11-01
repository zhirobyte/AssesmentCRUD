@extends('dashboard.layout')

@section('content')
<!-- ini adalah file cssnya untuk center table -->


   
    <!-- ini adalah line untuk table -->
 <table class="table table-bordered table-dark">
 
  <thead>
    <tr>
      <th scope="col"class="text-center">Id</th>
      <th scope="col"class="text-center">Nama</th>
      <th scope="col"class="text-center">Nidn</th>
      <th scope="col"class="text-center">Kontak</th>
      <!-- <th scope="col"class="text-center">Alamat</th>
      <th scope="col"class="text-center">create at</th>
      <th scope="col"class="text-center">update at</th> -->
      <th scope="col"class="text-center" width="230px">
      Action
      <div class="float-center" >
                <a class="btn btn-success" href="{{ route('dosen.create') }}">+ Dosen</a>
     </div>
  
      </th>
    </tr>
  </thead>
  <tbody>
      @foreach ($dosen as $key=>$value) 
    <tr>
         <td>{{ $value->id}}</td>
         <td>{{ $value->nama}}</td>
         <td>{{ $value->nidn}}</td>  
         <td>{{ $value->kontak}}</td>
         <!-- <td>{{ $value->alamat}}</td>
         <td>{{ $value->create_at}}</td>
         <td>{{ $value->update_at}}</td> -->
         <td>

        <!-- ini tuh adalah baris button dengan inline block -->
        <form style ="display:inline-block;">
        <a type="submit" class="btn btn-info" href="{{ route('dosen.show',$value->id) }}">Detail</a>
        </form>

          <!-- ini tuh adalah baris button edit dengan inline block -->
        <form style ="display:inline-block;">
        <a type="submit" class="btn btn-primary" href="{{ route('dosen.edit',$value->id) }}">Edit</a>  
        </form>

 
       <!-- ini tuh adalah baris button delete dengan inline block --> 
        <form action="{{ route('dosen.destroy',$value->id) }}" style ="display:inline-block;" method="POST">
            @csrf
            @method('DELETE')
        <button type="submit" class="btn btn-danger" href="{{ route('dosen.destroy',$value->id)}}">Delete</button>
        </form>
    </tr>
      
    @endforeach
  </tbody>

</table>

<h5 class="text-center">Page of Index Dosen</h5>
<h6 class="text-center">Faiz Hanafi - 2021</h6>

@endsection
