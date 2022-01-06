@extends('admin.template')
@section('isi')

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
                      <img src="template/images/product_02.png" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">{{$ob->NamaObat}}</h2>
                    </td>
                    <td>{{$ob->Harga}}</td>
                    <td>{{$ob->Stok}}</td>
                    <td>{{$ob->Kemasan}}</td>
                    <td><a href="#" class="btn btn-primary height-auto btn-sm">X</a></td>
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