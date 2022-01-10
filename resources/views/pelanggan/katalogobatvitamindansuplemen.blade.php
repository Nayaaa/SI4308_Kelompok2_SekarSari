@extends('pelanggan.template')
@section('isi')

<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="{{url ('/home')}}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Obat Vitamin dan Suplemen</strong></div>
        </div>
      </div>
    </div>
    

    <div class="site-section bg-light">
      <div class="container">
            
        <div class="row">

        @foreach($obat as $obt=> $ob)
          <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
            <span class="onsale">Sale</span>
            <a href="{{route('detail2', ['id' => $ob->id])}}"> <img src="{{ asset('template/images/'.$ob->Foto) }}" alt="Image"></a>
            <h3 class="text-dark"><a href="{{route('detail2', ['id' => $ob->id])}}">{{$ob->NamaObat}}</a></h3>
            <p class="price">{{$ob->Harga}}</p>
          </div>    
          @endforeach  
        </div>
      </div>
    </div>

@endsection