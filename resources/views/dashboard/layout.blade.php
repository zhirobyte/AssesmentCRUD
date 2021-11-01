<!doctype html>
<html lang="en">
  
  <head>
    <!-- /**
     * layout ini bertujuan untuk memberikan halaman static berupa custom
     * navbar yang berada pada semua tampilan dibeberapa pages yang beerbeda
     * ditambahkan dengan fungsi extends @ agar dapaat dipanggil :)
     *
     */ -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>AssesmentCRUD</title>
      
<style type="text/css">
    .table {
        margin: 35px auto;
        width: 80%;
    }
    .form{
      margin: 35px auto;
        width: 50%;

    }
   label {
    color: white !important;
    }
    
        h2 {
    color: #F5F8FA;
    }
        h5 {
    color: #F5F8FA;
    }

    h6 {
    color: #AAB8C2;
    }

    .navbar-custom {
            background-color: #1DA1F2;
        }
        
     .container {
        margin: 30px auto;
      
    }
  

 </style>

  </head>

  <body>

  <nav class="navbar navbar-custom">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="{{URL::asset('image/ammon.png')}}" width="50" height="50" class="d-inline-block align-text-top">
    </a>
    
    <h2 class="text-center">Assesment CRUD</h2>
    <h5 class="text-center">ESQBS</h5>
  </div>
</nav>
  <body style="background-color:#121212;">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
   
<div class="container">
  <div class="row">
  <div class="col text-center">
                <a class="btn btn-warning" href="{{route('mahasiswa.index')}}">Main Page</a>
     </div>
  </div>
</div>
    @yield('content')
    
  
    
   

  </body>
</html>