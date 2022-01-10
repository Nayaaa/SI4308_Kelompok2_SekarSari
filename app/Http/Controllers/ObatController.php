<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObatController extends Controller
{
    public function index()
    {
        $obat = Obat::all();
        return view('pelanggan.home', compact('obat'));
    }

    public function admin()
    {
        $obat = Obat::all();
        return view('admin.daftarobat', compact('obat'));
    }

    public function detail($id, $idpelanggan)
    {
        $obat = Obat::find($id);
        $user = pelanggan::find($idpelanggan);
        return view('pelanggan.detailobat', compact('obat', 'user'));
    }

    public function detail2($id)
    {
        $obat = Obat::find($id);
        return view('pelanggan.detailobat', compact('obat'));
    }

    public function katalog()
    {
        $obat = Obat::all();
        return view('pelanggan.katalog', compact('obat'));
    }

    public function katalogmata()
    {
        $obat = DB::table('obats')->where('Kategori', 'Mata')->get();
        return view('pelanggan.katalogmata', compact('obat'));
    }

    public function katalogobatkulitluar()
    {
        $obat = DB::table('obats')->where('Kategori', 'Obat Kulit Luar')->get();
        return view('pelanggan.katalogobatkulitluar', compact('obat'));
    }

    public function katalogobatperedanyeri()
    {
        $obat = DB::table('obats')->where('Kategori', 'Pereda Nyeri')->get();
        return view('pelanggan.katalogobatperedanyeri', compact('obat'));
    }

    public function katalogobatantiseptik()
    {
        $obat = DB::table('obats')->where('Kategori', 'Antiseptik')->get();
        return view('pelanggan.katalogobatantiseptik', compact('obat'));
    }

    public function katalogobatantiinflamasi()
    {
        $obat = DB::table('obats')->where('Kategori', 'Anti Inflamasi')->get();
        return view('pelanggan.katalogobatantiinflamasi', compact('obat'));
    }
    public function katalogobatalergi()
    {
        $obat = DB::table('obats')->where('Kategori', 'Alergi')->get();
        return view('pelanggan.katalogobatalergi', compact('obat'));
    }
    public function katalogobatmulutdantenggorokan()
    {
        $obat = DB::table('obats')->where('Kategori', 'Mulut & Tenggorokan')->get();
        return view('pelanggan.katalogobatmulutdantenggorokan', compact('obat'));
    }
    public function katalogobatpencernaan()
    {
        $obat = DB::table('obats')->where('Kategori', 'Pencernaan')->get();
        return view('pelanggan.katalogobatpencernaan', compact('obat'));
    }
    public function katalogobatvitamindansuplemen()
    {
        $obat = DB::table('obats')->where('Kategori', 'Vitamin dan Suplemen')->get();
        return view('pelanggan.katalogobatvitamindansuplemen', compact('obat'));
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

        return redirect()->route('daftarobat');

    }

    public function deleteobat(Request $request)
    {
        $obat = Obat::find($request->id);

        $obat->delete();

        return redirect(route('daftarobat'));
    }

    public function editobat($id)
    {
        $obat = Obat::find($id);

        return view('admin.editobat', compact('obat'));
    }

    public function updateobat(Request $request, $id)
    {
        $obat = Obat::find($id);

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

        return redirect()->route('daftarobat');
    }
}

