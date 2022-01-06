<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('templatelogin/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{ asset('templatelogin/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('templatelogin/css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('templatelogin/css/style.css')}}">

    <title>Sign Up || SEKARSARI</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="templatelogin/images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign Up to <strong>SekarSari</strong></h3>
              <br>
              <p class="mb-4">Sign Up untuk masuk ke Apotek Sekar Sari Online</p>
            </div>
            <form action="{{route('daftarpelanggan')}}" method="post">
                @csrf
              <div class="form-group ">
                <label for="nama">Nama Pelanggan</label>
                <input type="text" class="form-control" id="nama" name="nama">
              </div>
              <div class="form-group ">
                <label for="email">Email Pelanggan</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
              <div class="form-group ">
                <label for="nohp">No HP Pelanggan</label>
                <input type="text" class="form-control" id="nohp" name="nohp">
              </div>
              <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              <div class="form-group ">
                <label for="alamat">Alamat Pelanggan</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
              </div>
              <br>
              <input type="submit" value="Daftar" class="btn text-white btn-block btn-primary">
            </form>
            <br>
            <p class="mb-4">Sudah memiliki akun ? <a href="{{url('/')}}">login disini</a></p>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="templatelogin/js/jquery-3.3.1.min.js"></script>
    <script src="templatelogin/js/popper.min.js"></script>
    <script src="templatelogin/js/bootstrap.min.js"></script>
    <script src="templatelogin/js/main.js"></script>
  </body>
</html>