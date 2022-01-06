@extends('template')
@section('isi')
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
                
                <p><a href="#" class="btn btn-primary px-5 py-3">Shop Now</a></p>
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
                <p><a href="#" class="btn btn-primary px-5 py-3">Shop Now</a></p>
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

              <div class="text-center item mb-4 item-v2">
                <span class="onsale">Sale</span>
                <a href="#"> <img src="template/images/product_03.png" alt="Image"></a>
                <h3 class="text-dark"><a href="{{route('detail', ['id' => $ob->id])}}">{{$ob->NamaObat}}</a></h3>
                <p class="price">{{$ob->Harga}}</p>
              </div>

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
                  <img src="template/images/person_1.jpg" alt="Image" class="img-fluid">
                  <p>&ldquo;Berbelanja obat di apotek Sekar Sari sangat memuaskan. Pelayanan ramah dan produk terjamin.&rdquo;</p>
                </blockquote>

                <p class="author">&mdash; Sumirah</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="template/images/person_2.jpg" alt="Image" class="img-fluid">
                  <p>&ldquo;Tidak perlu diragukan lagi pelayanan apotek Sekar Sari. Apotek andalan keluarga turun-temurun nih !!&rdquo;</p>
                </blockquote>
              
                <p class="author">&mdash; Suwanto</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="template/images/person_3.jpg" alt="Image" class="img-fluid">
                  <p>&ldquo;Bisa book konsultasi dokter online terus bisa reschedule jugaa, paling top emang layanan apotek Sekar Sari. Joss !!!.&rdquo;</p>
                </blockquote>
              
                <p class="author">&mdash; Roni Juanto</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="template/images/person_4.jpg" alt="Image" class="img-fluid">
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
@endsection