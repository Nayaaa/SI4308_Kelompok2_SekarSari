@extends('pelanggan.template')
@section('isi')

<div class="site-section">
    <div class="container">
        <div class="row mb-5">
            <h2 class="h3 mb-3 text-black">Riwayat Transaksi Pemesanan Obat</h2>
            <div class="site-blocks-table">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="product-name">Product</th>
                            <th class="product-price">Total Price</th>
                            <th class="product-name">Metode Bayar</th>
                            <th class="product-name">Status</th>
                            <th class="product-name">Resi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($item as $ite=> $i)
                        @php
                        $nama = DB::table('obats')->where(['id' => $i->obat_id])->value('NamaObat');
                        @endphp
                        <tr>
                            <td class="product-name">
                                <h2 class="h5 text-black">{{$nama}}</h2>
                            </td>
                            <td>{{$i->totalbayar}}</td>
                            <td>{{$i->metodeBayar}}</td>
                            <td>{{$i->status}}</td>
                            <td>{{$i->resi}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
        <h2 class="h3 mb-3 text-black">Riwayat Transaksi Pemesanan Layanan Kesehatan</h2>
        <div class="site-blocks-table">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="product-name">Dokter</th>
                        <th class="product-name">Waktu Periksa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pesan as $ite=> $i)
                    @php
                    $dokter = DB::table('dokters')->where(['id' => $i->dokter_id])->value('nama');
                    @endphp
                    <tr>
                        <td class="product-name">
                            <h2 class="h5 text-black">{{$dokter}}</h2>
                        </td>
                        <td>{{$i->waktuperiksa}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection