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
                <li><a href="{{route('keranjangpelanggan', ['idpelanggan' => $id])}}">Keranjang</a></li>
                <li><a href="#">Riwayat Transaksi</a></li>
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
    <div class="owl-carousel owl-single px-0">
      <div class="site-blocks-cover overlay" style="background-image: url('/template/images/hero_bg.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 mx-auto align-self-center">
              <div class="site-block-cover-content text-center">
                <h1 class="mb-0"><strong class="text-primary">Sekar Sari</strong> Siap Melayani Anda</h1>

                <div class="row justify-content-center mb-5">
                  <div class="col-lg-6 text-center">
                    <p>Apotek Sekar Sari buka dari jam 8 Pagi hingga jam 9 Malam dan siap memberikan Pelayanan Terbaik Untuk Anda</p>
                  </div>
                </div>

                <p><a href="{{url('/katalog')}}" class="btn btn-primary px-5 py-3">Shop Now</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="site-blocks-cover overlay" style="background-image: url('template/images/hero_bg_2.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 mx-auto align-self-center">
              <div class="site-block-cover-content text-center">
                <h1 class="mb-0">Obat - Obatan <strong class="text-primary">Berkualitas</strong></h1>
                <div class="row justify-content-center mb-5">
                  <div class="col-lg-6 text-center">
                    <p>Kami menyediakan berbagai macam obat-obatan terpercaya dan aman serta dibawah pengawasan apoteker terpercaya.</p>
                  </div>
                </div>
                <p><a href="{{url('/katalog')}}" class="btn btn-primary px-5 py-3">Shop Now</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>



    <div class="site-section py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="feature">
              <span class="wrap-icon flaticon-24-hours-drugs-delivery"></span>
              <h3><a href="#">Beli Obat Online</a></h3>
              <p>Kami melayani pembelian obat secara online dan dikirim kepada anda melalui website ini.</p>
              <p><a href="#" class="d-flex align-items-center"><span class="mr-2">detail ...</span> <span class="icon-keyboard_arrow_right"></span></a></p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="feature">
              <span class="wrap-icon flaticon-medicine"></span>
              <h3><a href="#">Pick Up Obat</a></h3>
              <p>Kami melayani pembelian obat untuk diambil sendiri ke apotek oleh anda melalui website ini.</p>
              <p><a href="#" class="d-flex align-items-center"><span class="mr-2">detail ...</span> <span class="icon-keyboard_arrow_right"></span></a></p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="feature">
              <span class="wrap-icon flaticon-test-tubes"></span>
              <h3><a href="#">Layanan Kesehatan</a></h3>
              <p>Dapatkan konsultasi dari dokter-dokter spesalis terpercaya di apotek Sekar Sari</p>
              <p><a href="#" class="d-flex align-items-center"><span class="mr-2">detail ...</span> <span class="icon-keyboard_arrow_right"></span></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2>Produk <strong class="text-primary">Obat</strong></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">

              @foreach($obat as $obt=> $ob)
              @foreach($user as $us=> $u)

              <div class="text-center item mb-4 item-v2">
                <span class="onsale">Sale</span>
                <a href="{{route('detail', ['id' => $ob->id ,'idpelanggan' => $u->id])}}"> <img src="{{ asset('template/images/'.$ob->Foto) }}" alt="Image"></a>
                <br>
                <h3 class="text-dark"><a href="{{route('detail', ['id' => $ob->id ,'idpelanggan' => $u->id])}}">{{$ob->NamaObat}}</a></h3>
                <p class="price">{{$ob->Harga}}</p>
              </div>
              @endforeach
              @endforeach

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-lg-6">
            <div class="title-section">
              <h2>Kata <strong class="text-primary">Pelanggan</strong></h2>
            </div>
            <div class="block-3 products-wrap">
              <div class="owl-single no-direction owl-carousel">

                <div class="testimony">
                  <blockquote>
                    <img src="{{ asset('template/images/person_1.jpg')}}" alt="Image" class="img-fluid">
                    <p>&ldquo;Berbelanja obat di apotek Sekar Sari sangat memuaskan. Pelayanan ramah dan produk terjamin.&rdquo;</p>
                  </blockquote>

                  <p class="author">&mdash; Sumirah</p>
                </div>

                <div class="testimony">
                  <blockquote>
                    <img src="{{ asset('template/images/person_2.jpg')}}" alt="Image" class="img-fluid">
                    <p>&ldquo;Tidak perlu diragukan lagi pelayanan apotek Sekar Sari. Apotek andalan keluarga turun-temurun nih !!&rdquo;</p>
                  </blockquote>

                  <p class="author">&mdash; Suwanto</p>
                </div>

                <div class="testimony">
                  <blockquote>
                    <img src="{{ asset('template/images/person_3.jpg')}}" alt="Image" class="img-fluid">
                    <p>&ldquo;Bisa book konsultasi dokter online terus bisa reschedule jugaa, paling top emang layanan apotek Sekar Sari. Joss !!!.&rdquo;</p>
                  </blockquote>

                  <p class="author">&mdash; Roni Juanto</p>
                </div>

                <div class="testimony">
                  <blockquote>
                    <img src="{{ asset('template/images/person_4.jpg')}}" alt="Image" class="img-fluid">
                    <p>&ldquo;Belanja obat disini memuaskan. Bakal dikasi rekomendasi dan kita bisa nanya-nanya dulu ke mbak-mbaknya loo ... .&rdquo;</p>
                  </blockquote>

                  <p class="author">&mdash; Andre Sujito</p>
                </div>

              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="title-section">
              <h2 class="mb-5">Sekar <strong class="text-primary">Sari</strong></h2>
              <div class="step-number d-flex mb-4">
                <span>1</span>
                <p>Dibawah pengawasan apoteker profesional yang menjamin obat-obatan yang dijual</p>
              </div>

              <div class="step-number d-flex mb-4">
                <span>2</span>
                <p>Menyediakan layanan pembelian online dan juga self pickup</p>
              </div>

              <div class="step-number d-flex mb-4">
                <span>3</span>
                <p>Layanan Kesehatan oleh dokter-dokter spesialis dan berpengalaman dibidangnya.</p>
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
              <script>
                document.write(new Date().getFullYear());
              </script> Made
              with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="#" target="_blank" class="text-primary">Apotek Sekar Sari</a>
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