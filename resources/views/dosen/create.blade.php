@extends('dashboard.layout')

@section('content')

<form action="{{url('dosen')}}" method="POST">
@csrf
<div class="container">
  
        <!-- input form buat nama dosen -->
        <div class="form-group row align-items-center">
                    <label for="inputDosen" class="col-sm-2 col-form-label">Nama Dosen</label>
                <div class="col-sm-10">
                <input type="text" class="form-control"  style="width:900px;" name="nama"  placeholder="Dosen">
                </div>
        </div>  
         
         <!-- input form buat nidn dosen -->
         <div class="form-group row align-items-center">
                <label for="inputNidn" class="col-sm-2 col-form-label">Nidn dosen</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" style="width:900px;" name="nidn" placeholder="Nidn">
                </div>
            </div>   

      <!-- input form buat kontak dosen -->
         <div class="form-group row align-items-center">
                <label for="inputKontak" class="col-sm-2 col-form-label">Kontak Dosen</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" style="width:900px;" name="kontak" placeholder="Kontak">
                </div>
          </div>  
     <!-- input form buat alamat mahasiswa -->
         <div class="form-group row align-items-center">
                <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat Dosen</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" style="width:900px;" name="alamat" placeholder="Alamat">
                </div>
          </div>  
            
     <!-- input form Create at dosen -->
         <div class="form-group row align-items-center">
                <label for="inputCreate" class="col-sm-2 col-form-label">Create at</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" style="width:900px;" name="create_at" placeholder="create at">
                </div>
         </div>  
            
       <!-- input form Update at dosen -->
         <div class="form-group row align-items-center">
                <label for="inputUpdate" class="col-sm-2 col-form-label">Update at</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" style="width:900px;" name="update_at" placeholder="update at">
                </div>
        </div>  

        <!-- button save -->
        <div class="container">
            <div class="row">
                <div class="col text-center">
                <button class="btn btn-primary btn-lg">Save Data</button>
                </div>
            </div>
        </div>
     
</form>
<h5 class="text-center">Page of Create Dosen</h5>
<h6 class="text-center">Faiz Hanafi - 2021</h6>
@endsection