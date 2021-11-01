@extends('dashboard.layout')

@section('content')

<form action="{{url('jadwal')}}" method="POST">
@csrf
<div class="container">

        <!-- input form buat mhs id -->

          <div class="form-group row align-items-center">
                <label for="inputMhs" class="col-sm-2 col-form-label">Nama mahasiswa</label>
                <select class="form-control" name="mahasiswa_id" style="width:900px;">
                @foreach($dataMahasiswa as $mahasiswa)
                <option value="{{$mahasiswa->id}}">{{$mahasiswa->nama}}</option> 
                @endforeach
                </select>
            </div>
      <!-- input form buat nidn id -->
            <div class="form-group row align-items-center">
                <label for="inputDsn" class="col-sm-2 col-form-label">Nama Dosen</label>
                <select class="form-control" name="dosen_id" style="width:900px;">
                @foreach($dataDosen as $dosen)
                <option value="{{$mahasiswa->id}}">{{$dosen->nama}}</option> 
                @endforeach
                </select>
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
                <input type="date" class="form-control" style="width:900px;" name="awal" placeholder="Awal">
                </div>
          </div>    
          
          <!-- input form buat akhir  -->
         <div class="form-group row align-items-center">
                <label for="inputAkhir" class="col-sm-2 col-form-label">Akhir</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" style="width:900px;" name="akhir" placeholder="Akhir">
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

