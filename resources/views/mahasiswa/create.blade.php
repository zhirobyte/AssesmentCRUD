@extends('dashboard.layout')

@section('content')

<form action="{{ route('mahasiswa.create') }}" method="POST">

<div class="container">
  
    <!-- input form buat nama mhs -->
    <div class="form-group row align-items-center">
                <label for="inputMahasiswa" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                <div class="col-sm-10">
                <input type="text" class="form-control"  style="width:500px;" name="nama"  placeholder="Mahasiswa">
                </div>
         </div>  
         
         <!-- input form buat nnim mahassiswa -->
         <div class="form-group row align-items-center">
                <label for="inputNim" class="col-sm-2 col-form-label">Nim Mahasiswa</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" style="width:500px;" name="nim" placeholder="Nim">
                </div>
            </div>   

      <!-- input form buat tgl mahasiswa -->
         <div class="form-group row align-items-center">
                <label for="inputTgl" class="col-sm-2 col-form-label">TGL Mahasiswa</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" style="width:500px;" name="tanggal_lahir" placeholder="Alamat">
                </div>
            </div> 

     <!-- input form buat alamat mahasiswa -->
         <div class="form-group row align-items-center">
                <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat Mahasiswa</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" style="width:500px;" name="alamat" placeholder="Alamat">
                </div>
            </div>  
            
      <!-- input form buat tahun masuk mahasiswa -->
         <div class="form-group row align-items-center">
                <label for="inputTahun" class="col-sm-2 col-form-label">Tahun Mahasiswa</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" style="width:500px;" name="tahun_masuk" placeholder="Tahun masuk">
                </div>
            </div>  

     <!-- input form Create at mahasiswa -->
         <div class="form-group row align-items-center">
                <label for="inputCreate" class="col-sm-2 col-form-label">Create at</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" style="width:500px;" name="create_at" placeholder="create at">
                </div>
            </div>  
            
       <!-- input form Update at mahasiswa -->
         <div class="form-group row align-items-center">
                <label for="inputUpdate" class="col-sm-2 col-form-label">Update</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" style="width:500px;" name="update_at" placeholder="update at">
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


  @endsection