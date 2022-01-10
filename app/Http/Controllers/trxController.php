<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\pesananlayanan;
use App\Models\transaksi;
use App\Models\trx;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class trxController extends Controller
{
    public function checkout(Request $request)
    {
        $item = new transaksi();

        $item->pelanggan_id = $request->pelanggan_id;
        $item->obat_id = $request->obat_id;
        $item->totalbayar = $request->total;
        $item->metodeBayar = $request->metod;
        $item->status = $request->status;
        $item->resi = $request->resi;
        $item->save();
        
        $obat = DB::table('keranjangs')->where(['pelanggan_id' => $request->pelanggan_id, 'obat_id' => $request->obat_id]);

        $obat->delete();

        Session::flash('suksescheckout', 'Checkout 1 item Berhasil');

        return redirect()->route('keranjangpelanggan', [$request->pelanggan_id]);

    }

    public function transaksi($id)
    {
        $item = transaksi::all();
        $pesan = pesananlayanan::all();
        return view('pelanggan.trx', compact('item','pesan'));
    }
}
