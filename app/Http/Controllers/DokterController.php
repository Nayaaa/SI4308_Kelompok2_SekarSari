<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $dokter = Dokter::all();
        return view('admin.daftarlayanan', compact('dokter'));
    }

    public function tambahdokter(Request $request)
    {
        $dokter = new Dokter();

        $dokter->nama = $request->nama;
        $dokter->nohp = $request->nohp;
        $dokter->email = $request->email;
        $dokter->alamat = $request->alamat;
        $dokter->spesialis = $request->spesialis;
        $dokter->save();        

        return view('admin.daftarlayanan');

    }
}
