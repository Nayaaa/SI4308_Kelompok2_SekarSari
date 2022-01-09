<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use function PHPUnit\Framework\isEmpty;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('admin.daftarkaryawan', compact('karyawan'));
    }

    public function tambahkaryawan(Request $request)
    {
        $karyawan = new Karyawan();

        $karyawan->nama = $request->nama;
        $karyawan->nohp = $request->nohp;
        $karyawan->email = $request->email;
        $karyawan->password = $request->password;
        $karyawan->role = $request->role;
        $karyawan->save();        

        return redirect()->route('karyawan');

    }

    public function deletekaryawan(Request $request)
    {
        $karyawan = Karyawan::find($request->id);

        $karyawan->delete();

        return redirect(route('karyawan'));
    }

    public function editkaryawan($id)
    {
        $karyawan = Karyawan::find($id);

        return view('admin.editkaryawan', compact('karyawan'));
    }

    public function updatekaryawan(Request $request, $id)
    {
        $karyawan = Karyawan::find($id);

        $karyawan->nama = $request->nama;
        $karyawan->nohp = $request->nohp;
        $karyawan->email = $request->email;
        $karyawan->password = $request->password;
        $karyawan->role = $request->role;
        $karyawan->save();        

        return redirect()->route('karyawan');
    }

    public function auth(Request $req){
        $login = false;
        $email = $req->email;
        $pwd   = $req->password;
        $user = DB::table('karyawans')->where(['email' => $email, 'password' => $pwd])->get();
        if ($user->isNotEmpty()) {
            $login = true;
            return redirect()->route('daftarobat');
        }else{
            $login = false;
            Session::flash('error', 'Email atau Password Salah');
            return view('admin.login');
        }
    }
}
