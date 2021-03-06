@extends('admin.template')
@section('isi')
<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><strong class="text-black">Daftar Obat</strong><span class="mx-2 mb-0">/ . . .</span></div>
        </div>
      </div>
    </div>
<div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <a type="button" class="btn btn-primary mb-3" href="{{url ('/admin/tambahobat')}}">Tambah Obat</a>
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-name">Stok</th>
                    <th class="product-name">Kemasan</th>
                    <th class="product-name">Kelola</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($obat as $obt=> $ob)
                  <tr>
                    <td class="product-thumbnail">
                      <img src="{{ asset('template/images/'.$ob->Foto) }}" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">{{$ob->NamaObat}}</h2>
                    </td>
                    <td>{{$ob->Harga}}</td>
                    <td>{{$ob->Stok}}</td>
                    <td>{{$ob->Kemasan}}</td>
                    <td>
                         <form action="" method="POST">
                            <a href="{{route('editobat', ['id' => $ob->id])}}">
                                <button type="button" class="btn btn-warning btn-sm m-2">Edit</button>
                            </a>
                        </form>
                        <form action="{{route('deleteobat')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$ob->id}}" name="id">
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                Delete
                            </button>
                        </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </form>
        </div>
      </div>
    </div>

@endsection