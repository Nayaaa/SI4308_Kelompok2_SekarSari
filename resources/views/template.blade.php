<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pharmative &mdash; Colorlib Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="template/fonts/icomoon/style.css">

  <link rel="stylesheet" href="template/css/bootstrap.min.css">
  <link rel="stylesheet" href="template/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="template/css/magnific-popup.css">
  <link rel="stylesheet" href="template/css/jquery-ui.css">
  <link rel="stylesheet" href="template/css/owl.carousel.min.css">
  <link rel="stylesheet" href="template/css/owl.theme.default.min.css">


  <link rel="stylesheet" href="template/css/aos.css">

  <link rel="stylesheet" href="template/css/style.css">

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
              <a href="{{url ('/')}}" class="js-logo-clone"><strong class="text-primary">Sekar</strong>sari</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active"><a href="{{url ('/')}}">Home</a></li>
                <li><a href="#">Obat</a></li>
                <li class="has-children">
                  <a href="#">Kategori</a>
                  <ul class="dropdown">
                    <li><a href="#">Supplements</a></li>
                    <li class="has-children">
                      <a href="#">Vitamins</a>
                      <ul class="dropdown">
                        <li><a href="#">Supplements</a></li>
                        <li><a href="#">Vitamins</a></li>
                        <li><a href="#">Diet &amp; Nutrition</a></li>
                        <li><a href="#">Tea &amp; Coffee</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Diet &amp; Nutrition</a></li>
                    <li><a href="#">Tea &amp; Coffee</a></li>
                    
                  </ul>
                </li>
                <li><a href="#">Layanan Kesehatan</a></li>
                <li><a href="#">Tentang</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="#" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number">2</span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>
  
    @yield('isi')
    
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
              <li><a href="#">Home</a></li>
              <li><a href="#">Obat</a></li>
              <li><a href="#">Layanan Kesehatan</a></li>
              <li><a href="#">Tentang</a></li>
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

  <script src="template/js/jquery-3.3.1.min.js"></script>
  <script src="template/js/jquery-ui.js"></script>
  <script src="template/js/popper.min.js"></script>
  <script src="template/js/bootstrap.min.js"></script>
  <script src="template/js/owl.carousel.min.js"></script>
  <script src="template/js/jquery.magnific-popup.min.js"></script>
  <script src="template/js/aos.js"></script>

  <script src="template/js/main.js"></script>

</body>

</html>