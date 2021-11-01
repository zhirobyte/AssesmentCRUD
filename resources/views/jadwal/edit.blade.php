@extends('dashboard.layout')

@section('content')

<form action="{{url('jadwal/'.$jadwal->id)}}" method="POST">
@csrf
@method('PUT')
<input type="hidden" name="_method" value="PATCH">
<div class="container">

       
        <div class="form-group row align-items-center">
                    <label for="inputMhs" class="col-sm-2 col-form-label">Nama mahasiswa</label>
                <div class="col-sm-10">
                <input type="text" class="form-control"  style="width:900px;" name="mahasiswa_id"  placeholder="Mahasiswa">
                </div>
        </div>  
                
         <!-- input form buat nidn dosen -->
         <div class="form-group row align-items-center">
                <label for="inputNidn" class="col-sm-2 col-form-label">Nidn dosen</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" style="width:900px;" name="dosen_id" placeholder="Nidn">
                </div>
            </div>   

      <!-- input form buat judul -->
         <div class="form-group row align-items-center">
                <label for="inputjudul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" style="width:900px;" name="judul" placeholder="judul">
                </div>
          </div>  
     <!-- input form buat alamat mahasiswa -->
         <div class="form-group row align-items-center">
                <label for="inputDeskripsi" class="col-sm-2 col-form-label">Deskripi</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" style="width:900px;" name="deskripsi" placeholder="deskripsi">
                </div>
          </div>  

              <!-- input form buat awal -->
         <div class="form-group row align-items-center">
                <label for="inputAwal" class="col-sm-2 col-form-label">Awal</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" style="width:900px;" name="awal" placeholder="Awal">
                </div>
          </div>    
          
          <!-- input form buat akhir  -->
         <div class="form-group row align-items-center">
                <label for="inputAkhir" class="col-sm-2 col-form-label">Akhir</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" style="width:900px;" name="akhir" placeholder="Akhir">
                </div>
          </div>  


     <!-- input form Create at  -->
         <div class="form-group row align-items-center">
                <label for="inputCreate" class="col-sm-2 col-form-label">Create at</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" style="width:900px;" name="create_at" placeholder="create at">
                </div>
         </div>  
            
       <!-- input form Update at  -->
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
<h5 class="text-center">Page of Create jadwal</h5>
<h6 class="text-center">Faiz Hanafi - 2021</h6>
@endsection

