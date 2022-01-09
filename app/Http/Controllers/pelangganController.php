<?php

namespace App\Http\Controllers;

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
            return redirect()->route('obat');
        }else{
            $login = false;
            Session::flash('error', 'Email atau Password Salah');
            return view('pelanggan.login');
        }
    }
}
