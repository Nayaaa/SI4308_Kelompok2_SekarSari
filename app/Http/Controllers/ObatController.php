<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        $obat = Obat::all();
        return view('pelanggan/home', compact('obat'));
    }

    public function admin()
    {
        $obat = Obat::all();
        return view('admin.daftarobat', compact('obat'));
    }

    public function detail($id)
    {
        $obat = Obat::find($id);

        return view('pelanggan.detailobat', compact('obat'));
    }

    public function katalog()
    {
        $obat = Obat::all();
        return view('pelanggan.katalog', compact('obat'));
    }

    public function tambahobat(Request $request)
    {
        $obat = new Obat();

        if ($files = $request->file('Foto')) {
            $destinationPath = public_path("/template/images/"); // upload path
            $fileName = date('YmdHis') . "." . $files->getClientOriginalName();
            $files->move($destinationPath, $fileName);
            $obat->Foto = $fileName;

        }

        $obat->NamaObat = $request->NamaObat;
        $obat->Harga = $request->Harga;
        $obat->Stok = $request->Stok;
        $obat->Kategori = $request->Kategori;
        $obat->Deskripsi = $request->Deskripsi;
        $obat->Indikasi = $request->Indikasi;
        $obat->Komposisi = $request->Komposisi;
        $obat->Dosis = $request->Dosis;
        $obat->AturanPakai = $request->AturanPakai;
        $obat->KontraIndikasi = $request->KontraIndikasi;
        $obat->Perhatian = $request->Perhatian;
        $obat->EfekSamping = $request->EfekSamping;
        $obat->Segmentasi = $request->Segmentasi;
        $obat->Kemasan = $request->Kemasan;
        $obat->Manufaktur = $request->Manufaktur;
        $obat->NoRegis = $request->NoRegis;
        $obat->save();        

        return redirect()->route('admin');

    }
}

