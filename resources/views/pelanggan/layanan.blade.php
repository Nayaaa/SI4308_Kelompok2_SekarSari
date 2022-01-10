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
  @if(session('sukses'))
        <div class="alert alert-success">
            </b> {{session('sukses')}}
        </div>
        @endif
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
    <h2 class="h3 mb-3 text-black">Book Layanan Kesehatan</h2>
    <form action="{{route('pesan')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-12 mb-5 mb-md-0">
          <div class="p-3 p-lg-5 border">
            <input type="hidden" value="{{$idpelanggan}}" class="form-control" id="id" name="id">
            <div class="form-group row">
              <div class="col-md-12">
                <label for="dokter" class="text-black">Dokter<span class="text-danger">*</span></label>
                <select name="dokter" id="dokter" class="form-control">
                @foreach($dokter as $ite=> $i)
                  <option value="{{$i->nama}}">{{$i->nama}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="waktu" class="text-black">Waktu Periksa<span class="text-danger">*</span></label>
              <input type="date" class="form-control" id="waktu" name="waktu">
            </div>
            <button type="submit" class="btn btn-primary col-12 mt-5">Simpan</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection