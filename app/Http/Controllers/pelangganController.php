<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use Illuminate\Http\Request;

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
}
