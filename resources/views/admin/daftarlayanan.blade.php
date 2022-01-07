@extends('admin.template')
@section('isi')
<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="{{url ('/admin')}}">Daftar Obat</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Daftar Layanan</strong></div>
        </div>
      </div>
</div>
<div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <a type="button" class="btn btn-primary mb-3" href="{{url ('/admin/tambahdokter')}}">Tambah Dokter</a>
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-name">Nama</th>
                    <th class="product-name">No HP</th>
                    <th class="product-name">Email</th>
                    <th class="product-name">Alamat</th>
                    <th class="product-name">Spesialis</th>
                    <th class="product-name">Kelola</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($dokter as $dok=> $d)
                  <tr>
                    <td class="product-name">
                      <h2 class="h5 text-black">{{$d->nama}}</h2>
                    </td>
                    <td>{{$d->nohp}}</td>
                    <td>{{$d->email}}</td>
                    <td>{{$d->alamat}}</td>
                    <td>{{$d->spesialis}}</td>
                    <td>
                         <form action="" method="POST">
                            <a href="{{route('editdokter', ['id' => $d->id])}}">
                                <button type="button" class="btn btn-warning btn-sm m-2">Edit</button>
                            </a>
                        </form>
                        <form action="{{route('deletedokter')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$d->id}}" name="id">
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