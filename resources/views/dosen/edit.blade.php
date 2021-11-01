@extends('dashboard.layout')

@section('content')

<form action="{{url('dosen/'.$dosen->id)}}" method="POST">
@csrf
@method('PUT')
<input type="hidden" name="_method" value="PATCH">
<div class="container">
  
        <!-- input form buat nama mhs -->
        <div class="form-group row align-items-center">
                    <label for="inputDosen" class="col-sm-2 col-form-label">Nama Dosen</label>
                <div class="col-sm-10">
                <input type="text" class="form-control"  style="width:900px;" value="{{$dosen->nama}}" name="nama"  placeholder="Dosen">
                </div>
        </div>  
         
         <!-- input form buat nidn  -->
         <div class="form-group row align-items-center">
                <label for="inputNidn" class="col-sm-2 col-form-label">Nidn</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" style="width:900px;" value="{{$dosen->nim}}" name="nidn" placeholder="Nidn">
                </div>
            </div>   

      <!-- input form buat tgl mahasiswa -->
         <div class="form-group row align-items-center">
                <label for="inputKontak" class="col-sm-2 col-form-label">Kontak</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" style="width:900px;" value="{{$dosen->kontak}}" name="kontak" placeholder="Kontak">
                </div>
         </div> 

     <!-- input form buat alamat mahasiswa -->
         <div class="form-group row align-items-center">
                <label for="inputDosen" class="col-sm-2 col-form-label">Alamat Dosen</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" style="width:900px;" value="{{$dosen->alamat}}" name="alamat" placeholder="Alamat">
                </div>
          </div>  
            
     <!-- input form Create at mahasiswa -->
         <div class="form-group row align-items-center">
                <label for="inputCreate" class="col-sm-2 col-form-label">Create at</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" style="width:900px;" value="{{$dosen->create_at}}" name="create_at" placeholder="create at">
                </div>
         </div>  
            
       <!-- input form Update at mahasiswa -->
         <div class="form-group row align-items-center">
                <label for="inputUpdate" class="col-sm-2 col-form-label">Update at</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" style="width:900px;" value="{{$dosen->update_at}}" name="update_at" placeholder="update at">
                </div>
        </div>  

        <!-- button save -->
        <div class="container">
            <div class="row">
                <div class="col text-center">
                <button class="btn btn-primary btn-lg">Update Data</button>
                
                </div>
            </div>
        </div>
</form>
<h5 class="text-center">Page of Update Dosen</h5>
<h6 class="text-center">Faiz Hanafi - 2021</h6>
@endsection