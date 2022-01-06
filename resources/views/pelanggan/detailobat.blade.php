@extends('pelanggan.template')
@section('isi')

<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="{{url ('/home')}}">Home</a> <span class="mx-2 mb-0">/</span><strong class="text-black">{{$obat->NamaObat}}</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
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
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 220px;">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                </div>
                <input type="text" class="form-control text-center" value="1" placeholder=""
                  aria-label="Example text with button addon" aria-describedby="button-addon1">
                <div class="input-group-append">
                  <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                </div>
              </div>
    
            </div>
            <p><a href="cart.html" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Masukkan Keranjang</a></p>    
          </div>
          <div class="container">
          <div class="mt-5">
              <ul class="nav nav-pills mb-3 custom-pill" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="true">Spesifikasi</a>
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
                        <td class="bg-light">{{$obat->Aturan}}</td>
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

@endsection