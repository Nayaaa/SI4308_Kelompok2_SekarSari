@extends('admin.template')
@section('isi')
<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="{{url ('/admin')}}">Daftar Obat</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Daftar Book Layanan</strong></div>
    </div>
  </div>
</div>
<div class="site-section">
  <div class="container">
    <div class="row mb-5">
      <form class="col-md-12" method="post">
        <div class="site-blocks-table">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="product-name">Nama Pelanggan</th>
                <th class="product-name">Nama Dokter</th>
                <th class="product-name">Waktu Periksa</th>
              </tr>
            </thead>
            <tbody>
              @foreach($item as $dok=> $d)
              @php
              $nama = DB::table('pelanggans')->where(['id' => $d->pelanggan_id])->value('nama');
              $dokter = DB::table('dokters')->where(['id' => $d->dokter_id])->value('nama');
              @endphp
              <tr>
                <td class="product-name">
                  <h2 class="h5 text-black">{{$nama}}</h2>
                </td>
                <td>{{$dokter}}</td>
                <td>{{$d->waktuperiksa}}</td>
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