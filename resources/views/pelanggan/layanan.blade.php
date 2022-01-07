@extends('pelanggan.template')
@section('isi')

<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="{{url ('/home')}}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Layanan Kesehatan</strong></div>
        </div>
      </div>
    </div>

     <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2>Layanan <strong class="text-primary">Kesehatan</strong></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">

            @foreach($dokter as $dok=> $d)

              <div class="text-center item mb-4 item-v2">
                <a href="#"> <img src="{{ asset('template/images/'.$d->foto) }}" alt="Image"></a>
                <br>
                <h3 class="text-dark"><a href="#">{{$d->nama}}</a></h3>
                <p class="price">{{$d->spesialis}}</p>
              </div>

            @endforeach

            </div>
          </div>
        </div>
      </div>
    </div>
@endsection