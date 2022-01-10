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
        $item = DB::table('transaksis')->where(['pelanggan_id'=> $id])->get();
        $pesan = DB::table('pesananlayanans')->where(['pelanggan_id'=> $id])->get();
        return view('pelanggan.trx', compact('item','pesan'));
    }

    public function daftarpesanan()
    {
        $item = transaksi::all();
        return view('admin.daftarpesanan', compact('item'));
    }

    public function update($id)
    {
        $item = transaksi::find($id);

        return view('admin.updatestatus', compact('item'));
    }

    public function updatestatus(Request $request, $id)
    {
        $item = transaksi::find($id);

        $item->status = $request->status;
        $item->resi = $request->resi;
        $item->save();   

        return redirect()->route('daftarpesanan');
    }

    public function daftarbooklayanan()
    {
        $item = pesananlayanan::all();
        return view('admin.daftarbooklayanan', compact('item'));
    }
}
