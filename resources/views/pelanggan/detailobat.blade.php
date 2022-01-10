<!DOCTYPE html>
<html lang="en">

<head>
  <title>Apotek Sekar Sari</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('template/fonts/icomoon/style.css')}}">

  <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template/fonts/flaticon/font/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('template/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('template/css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('template/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template/css/owl.theme.default.min.css') }}">


  <link rel="stylesheet" href="{{ asset('template/css/aos.css') }}">

  <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">

</head>

<body>
  <div class="site-wrap">
    <div class="site-navbar py-2">
      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="{{url ('/home')}}" class="js-logo-clone"><strong class="text-primary">Sekar</strong>sari</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active"><a href="{{url ('/home')}}">Home</a></li>
                <li><a href="{{url ('/katalog')}}">Obat</a></li>
                <li class="has-children">
                  <a href="#">Kategori</a>
                  <ul class="dropdown">
                    <li><a href="{{url('/katalogobatkulitluar')}}">Obat Kulit Luar</a></li>
                    <li><a href="{{url('/katalogobatperedanyeri')}}">Pereda Nyeri</a></li>
                    <li><a href="{{url('/katalogobatantiseptik')}}">Antiseptik</a></li>
                    <li><a href="{{url('/katalogobatantiinflamasi')}}">Anti Inflamasi</a></li>
                    <li><a href="{{url('/katalogobatmata')}}">Mata</a></li>
                    <li><a href="{{url('/katalogobatalergi')}}">Alergi</a></li>
                    <li><a href="{{url('/katalogobatmulutdantenggorokan')}}">Mulut & Tenggorokan</a></li>
                    <li><a href="{{url('/katalogobatpencernaan')}}">Pencernaan</a></li>
                    <li><a href="{{url('/katalogobatvitamindansuplemen')}}">Vitamin dan Suplemen</a></li>
                  </ul>
                <li><a href="{{url('/pelanggan/layanan')}}">Layanan Kesehatan</a></li>
                <li><a href="{{route('keranjangpelanggan', ['idpelanggan' => $user->id])}}">Keranjang</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="{{url ('/')}}" class="icons-btn d-inline-block bag">
              <span class="icon-sign-out"></span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="{{url ('/home')}}">Home</a> <span class="mx-2 mb-0">/</span><strong class="text-black">{{$obat->NamaObat}}</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        @if(session('sukses'))
        <div class="alert alert-success">
          </b> {{session('sukses')}}
        </div>
        @endif
        <div class="row">
          <div class="col-md-5 mr-auto">
            <div class="border text-center">
              <img src="{{ asset('template/images/'.$obat->Foto) }}" alt="Image" class="img-fluid p-5">
            </div>
          </div>
          <div class="col-md-6">
            <h2 class="text-black">{{$obat->NamaObat}}</h2>
            <p>{{$obat->Deskripsi}}</p>
            <p><strong class="text-primary h4">Rp. {{$obat->Harga}}</strong></p>
            <form action="{{route('tambahkeranjang', ['idobat' => $obat->id ,'idpelanggan' => $user->id])}}" method="post">
              @csrf
              <div class="mb-5">
                <div class="input-group mb-3" style="max-width: 220px;">
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                  </div>
                  <input type="text" name="jumlah" id="jumlah" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                  <div class="input-group-append">
                    <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                  </div>
                </div>

              </div>
              <button type="submit" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Masukkan Keranjang</button>
            </form>
          </div>
          <div class="container">
            <div class="mt-5">
              <ul class="nav nav-pills mb-3 custom-pill" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="true">Spesifikasi</a>
                </li>
              </ul>
              <div class="tab-content" id="pills-profike-tab">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <table class="table custom-table">

                    <tbody>
                      <tr>
                        <td>Kategori</td>
                        <td class="bg-light">{{$obat->Kategori}}</td>
                      </tr>
                      <tr>
                        <td>Indikasi Umum</td>
                        <td class="bg-light">{{$obat->Indikasi}}</td>
                      </tr>
                      <tr>
                        <td>Komposisi</td>
                        <td class="bg-light">{{$obat->Komposisi}}</td>
                      </tr>
                      <tr>
                        <td>Dosis</td>
                        <td class="bg-light">{{$obat->Dosis}}</td>
                      </tr>
                      <tr>
                        <td>Aturan Pakai</td>
                        <td class="bg-light">{{$obat->AturanPakai}}</td>
                      </tr>
                      <tr>
                        <td>Kontra Indikasi</td>
                        <td class="bg-light">{{$obat->KontraIndikasi}}</td>
                      </tr>
                      <tr>
                        <td>Perhatian</td>
                        <td class="bg-light">{{$obat->Perhatian}}</td>
                      </tr>
                      <tr>
                        <td>Efek Samping</td>
                        <td class="bg-light">{{$obat->EfekSamping}}</td>
                      </tr>
                      <tr>
                        <td>Segmentasi</td>
                        <td class="bg-light">{{$obat->Segmentasi}}</td>
                      </tr>
                      <tr>
                        <td>Kemasan</td>
                        <td class="bg-light">{{$obat->Kemasan}}</td>
                      </tr>
                      <tr>
                        <td>Manufaktur</td>
                        <td class="bg-light">{{$obat->Manufaktur}}</td>
                      </tr>
                      <tr>
                        <td>No. Registrasi</td>
                        <td class="bg-light">{{$obat->NoRegis}}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">Tentang <strong class="text-primary">Sekar Sari</strong></h3>
              <p>Merupakan apotek yang menyediakan berbagai obat-obatan lengkap dan bervariasi. Terdapat pula beberapa layanan pemeriksaan kesehatan oleh dokter-dokter spesialis.</p>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Navigation</h3>
            <ul class="list-unstyled">
              <li><a href="{{url('/home')}}">Home</a></li>
              <li><a href="{{url('/katalog')}}">Obat</a></li>
              <li><a href="{{url('/pelanggan/layanan')}}">Layanan Kesehatan</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">Jalan Raya Takmung No 1X Klungkung ( Sebelah Timur Kantor Perikanan)</li>
                <li class="phone"><a href="tel://081339934208">081339934208</a></li>
                <li class="email">apoteksekarsari@gmail.com</li>
              </ul>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> Made
              with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="#" target="_blank"
                class="text-primary">Apotek Sekar Sari</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="{{ asset('template/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{ asset('template/js/jquery-ui.js')}}"></script>
  <script src="{{ asset('template/js/popper.min.js')}}"></script>
  <script src="{{ asset('template/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('template/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('template/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ asset('template/js/aos.js')}}"></script>

  <script src="{{ asset('template/js/main.js')}}"></script>

</body>

</html>