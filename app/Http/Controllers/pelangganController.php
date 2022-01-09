<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Obat;
use App\Models\pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class pelangganController extends Controller
{
    
    public function daftar(Request $request)
    {
        $pelanggan = new pelanggan();

        $pelanggan->nama = $request->nama;
        $pelanggan->email = $request->email;
        $pelanggan->nohp = $request->nohp;
        $pelanggan->password = $request->password;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->save();        

        return view('pelanggan.login');

    }

    public function auth(Request $req){
        $login = false;
        $email = $req->email;
        $pwd   = $req->password;
        $user = DB::table('pelanggans')->where(['email' => $email, 'password' => $pwd])->get();
        if ($user->isNotEmpty()) {
            $login = true;
            $obat = Obat::all();
            return view('pelanggan.home', compact('obat', 'user'));
        }else{
            $login = false;
            Session::flash('error', 'Email atau Password Salah');
            return view('pelanggan.login');
        }
    }

    public function tambahkeranjang(Request $request, $idobat, $idpelanggan)
    {
        $keranjangitem = new Keranjang();

        $keranjangitem->obat_id = $idobat;
        $keranjangitem->pelanggan_id = $idpelanggan;
        $keranjangitem->jumlah = $request->jumlah;
        $keranjangitem->save();

        $obat = Obat::find($idobat);
        $user = pelanggan::find($idpelanggan);

        Session::flash('sukses', 'Sukses Menambahkan Obat ke Keranjang');
        return view('pelanggan.detailobat', compact('obat', 'user'));
    }

    public function keranjang($idpelanggan)
    {
        $item = DB::table('keranjangs')->where(['pelanggan_id' => $idpelanggan])->get();
        
        return view('pelanggan.keranjang', compact('item'));
    }
    public function deleteitem(Request $request, $idpelanggan)
    {
        $obat = DB::table('keranjangs')->where(['pelanggan_id' => $idpelanggan, 'obat_id' => $request->id]);

        $obat->delete();

        return redirect(route('keranjangpelanggan',[$idpelanggan]));
    }
}
