@extends('admin.template')
@section('isi')
<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="{{url ('/admin')}}">Daftar Obat</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Daftar Pesanan</strong></div>
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
                <th class="product-name">Pesanan</th>
                <th class="product-name">Total Tagihan</th>
                <th class="product-name">Alamat</th>
                <th class="product-name">Status</th>
                <th class="product-name">Resi</th>
                <th class="product-name">Kelola</th>
              </tr>
            </thead>
            <tbody>
              @foreach($item as $dok=> $d)
              @php
              $nama = DB::table('pelanggans')->where(['id' => $d->pelanggan_id])->value('nama');
              $obat = DB::table('obats')->where(['id'=> $d->obat_id])->value('NamaObat');
              $alamat = DB::table('pelanggans')->where(['id' => $d->pelanggan_id])->value('alamat');
              @endphp
              <tr>
                <td class="product-name">
                  <h2 class="h5 text-black">{{$nama}}</h2>
                </td>
                <td>{{$obat}}</td>
                <td>{{$d->totalbayar}}</td>
                <td>{{$alamat}}</td>
                <td>{{$d->status}}</td>
                <td>{{$d->resi}}</td>
                <td>
                  <form action="" method="get">
                    @csrf
                    <a href="{{route('update',['id'=>$d->id])}}" type="button" class="btn btn-primary btn-sm" title="Update Status">
                    Update Status</a>
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